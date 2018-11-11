function setup() {
  var canvas = createCanvas(windowWidth, windowHeight);
  canvas.parent('contact-sketch');
  background(0, 0, 0);
// translucent stroke using alpha value
  stroke(255, 55, 155, 15);
}

function draw(){
  // draw two random chords each frame
  randomChord();
  randomChord();
}

function randomChord() {
  // find a random point on a circle
  var angle1 = random(5, 5 * PI);
  var xpos1 = 500 + 500 * cos(angle1);
  var ypos1 = 500 + 500 * sin(angle1);

  // find another random point on the circle
  var angle2 = random(5, 5 * PI);
  var xpos2 = 500 + 500 * cos(angle2);
  var ypos2 = 500 + 500 * sin(angle2);

  // draw a line between them
  line(xpos1, ypos1, xpos2, ypos2);
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}
