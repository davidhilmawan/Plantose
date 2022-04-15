const Result = {
  0: "Apple Scab",
  1: "Apple Black Rot",
  2: "Apple Ceddar Rust",
  3: "Healthy Apple",
  4: "Background",
  5: "Healthy Blueberry",
  6: "Cherry Powdery Mildew",
  7: "Healthy Cherry",
  8: "Corn Cercospora Leaf Spot/Gray Leaf Spot",
  9: "Corn Common Rust",
  10: "Corn Northen Leaf Blight",
  11: "Healthy Corn",
  12: "Grape Black Rot",
  13: "Grape Esca (Black Measels)",
  14: "Grape Leaf Blight (Isariopsis Leaf Spot)",
  15: "Healthy Grape",
  16: "Orange Haunglongbing (Citrus Greening)",
  17: "Peach Bacterial Spot",
  18: "Healthy Peach",
  19: "Bell Pepper Bacterial Spot",
  20: "Healthy Bell Pepper",
  21: "Potato Early Blight",
  22: "Potato Late Blight",
  23: "Healthy Potato",
  24: "Healthy Raspberry",
  25: "Healthy Soybean",
  26: "Squash Powdery Mildew",
  27: "Strawberry Leaf Scorch",
  28: "Healthy Strawberry",
  29: "Tomato Bacterial Spot",
  30: "Tomato Early Blight",
  31: "Tomato Late Blight",
  32: "Tomato Leaf Mold",
  33: "Tomato Septoria Leaf Spot",
  34: "Tomato Spider Mites Two-Spotted Spider Mite",
  35: "Tomato Target Spot",
  36: "Tomato Yellow Leaf Curl Virus",
  37: "Tomato Mosaic Virus",
  38: "Healthy Tomato"
};

let model;

$(document).ready(async function () {
	$('.progress-bar').show();
	model = await tf.loadLayersModel('/model/model.json');
	$('.progress-bar').hide();
});

$("#image-selector").change(function () {
	let reader = new FileReader();
	reader.onload = function () {
		let dataURL = reader.result;
		$("#selected-image").attr("src", dataURL);
		$("#prediction-list").empty();
	}

	let file = $("#image-selector").prop('files')[0];
	reader.readAsDataURL(file);
});

$("#predictBtn").click(async function () {
	let image = $('#selected-image').get(0);

  console.log(image)
	
	let pre_image = tf.browser.fromPixels(image, 3)
		.resizeNearestNeighbor([256, 256])
		.expandDims()
		.toFloat()
    .div(tf.scalar(255)); 
	let predict_result = await model.predict(pre_image).data();
	console.log(predict_result);
	let order = Array.from(predict_result)
		.map(function (p, i) { 
			return {
				probability: p,
				className: Result[i] 
			};
		}).sort(function (a, b) {
			return b.probability - a.probability;
		}).slice(0, 2);

	$("#prediction-list").empty();
	order.forEach(function (p) {
		$("#prediction-list").append(`<li>${p.className}: ${parseInt(Math.trunc(p.probability * 100))} %</li>`);
	});
});