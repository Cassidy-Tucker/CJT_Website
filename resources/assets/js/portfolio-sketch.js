var yoff = 1.0;

function setup() {
var canvas = createCanvas(windowWidth, windowHeight-4);
canvas.parent('portfolio-sketch');
}

function draw() {
  fill(150,152,207);
  noiseDetail(1, 0.65);
  beginShape();
  var xoff = 0;
  for (var x = 0; x <= width; x += 5) {
    var y = map(noise(xoff, yoff), 0, 1, 500, 300);
    vertex(x, y);
    // Increment x dimension for noise
    xoff += 0.09;
    }
    // increment y dimension for noise
    yoff += 0.02;
    vertex(width, height);
    vertex(1, height);
    endShape(CLOSE);
}
function windowResized() {
  resizeCanvas(windowWidth, windowHeight-4);
}
