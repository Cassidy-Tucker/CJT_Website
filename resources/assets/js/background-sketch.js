var barWidth = 3;
var lastBar = -1;

var NUMSINES = 10;
var sines = new Array(NUMSINES);
var rad;
var i;

var fund = 0.01;
var ratio = 2;
var alpha = 10;

var trace = false;

function setup() {
  var canvas = createCanvas(windowWidth, windowHeight);
  canvas.parent('sketch-holder');

  colorMode(HSB, width, height, 100);
    noStroke();

  rad = height/5;
  for (var i = 0; i<sines.length; i++) {
    sines[i] = PI;
  }

}

function draw() {
  var whichBar = mouseX / barWidth;
   if (whichBar != lastBar) {
     var barX = whichBar * barWidth;
     fill(barX, mouseY, 66);
     rect(barX, 0, barWidth, height);
     lastBar = whichBar;
   }

  // if (!trace) {
  //   background(0);
    stroke(0);
  //   noFill();
  // }

  push();
  translate(width/2, height/2);

  for (var i = 0; i<sines.length; i++) {
    var erad = 2;

    if (trace) {
      stroke(0, 0, 255*(float(i)/sines.length), alpha);
      fill(0);
      erad = 9.0*(1.0-float(i)/sines.length); // pen width will be related to which sine
    }
    var radius = rad/(i+0.5);
    rotate(sines[i]);
    if (!trace) ellipse(0, 0, radius*2, radius*2); // if we're simulating, draw the sine
    push();
    translate(0, radius);
    if (!trace) ellipse(0, 0, 1, 0);
    if (trace) ellipse(0, 0, erad, erad);
    pop();
    translate(20, radius);
    sines[i] = (sines[i]+(fund+(fund*i*ratio)))%TWO_PI;
  }
  pop();
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}
