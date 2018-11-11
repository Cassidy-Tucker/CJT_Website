var inc = 0.10;
var scl = 20;
var cols,rows;
var zoff = 0;
var particles = [];
var flowfield = [];

function setup(){
  var canvas = createCanvas(windowWidth,windowHeight);
  canvas.parent('about-sketch');
  cols = floor(width / scl);
  rows = floor(height / scl);
  flowfield = new Array(cols*rows);
  for(var i = 0;i<500;i++){
    particles[i] = new Particle();
  }
  background(0);
  colorMode(HSB);
  pixelDensity(1);
}

function draw(){
  var yoff = 0;
  for(var y = 0;y<rows;y++){
    var xoff = 0;
    for(var x = 0;x<cols;x++){
      var i = (x+y*cols);
      var n = noise(xoff, yoff, zoff) * TWO_PI * 10;
      var v = p5.Vector.fromAngle(n);
      v.setMag(0.75);
      flowfield[i] = v;
      xoff+=inc;
    }
    yoff+=inc;
    zoff+=0.0002;
  }

  for(var i = 0;i<particles.length;i++){
    particles[i].follow(flowfield);
    particles[i].update();
    particles[i].edges();
    particles[i].show();
  }
}

function Particle(){
  this.pos = createVector(random(width/1),random(height));
  this.vel = createVector(0,0);
  this.acc = createVector(0,0);
  this.maxspeed = 2;
  this.prev = this.pos.copy();

  this.show = function(){
    stroke(sin((frameCount)/100)*255,255,255,0.1);
    strokeWeight(1);
    line(this.pos.x, this.pos.y, this.prev.x, this.prev.y);
    line(width-this.pos.x, this.pos.y, width-this.prev.x, this.prev.y);
    this.updatePrev();
  }

  this.update = function(){
    this.vel.add(this.acc);
    this.vel.limit(this.maxspeed)
    this.pos.add(this.vel);
    this.acc.mult(0);
  }

  this.applyForce = function(force){
    this.acc.add(force);
  }

  this.updatePrev = function(){
      this.prev.x = this.pos.x;
      this.prev.y = this.pos.y;
  }

  this.edges = function(){
    if(this.pos.x > width) { this.pos.x = 0; this.updatePrev();};
    if(this.pos.x < 0) {this.pos.x = width; this.updatePrev();};
    if(this.pos.y > height) {this.pos.y = 0; this.updatePrev();};
    if(this.pos.y < 0) {this.pos.y = height; this.updatePrev();};
  }

  this.follow = function(vectors){
    var x = floor(this.pos.x/scl);
    var y = floor(this.pos.y/scl);
    var i = x+y*cols;
    var f = vectors[i];
    this.applyForce(f);
  }
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight-4);
}
