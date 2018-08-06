window.onload = function() {
	document.getElementById('go').addEventListener('click', loadPredefinedPanorama, false);

};

// Load the predefined panorama
function loadPredefinedPanorama(evt) {
	console.log(12345);
	evt.preventDefault();

	var div = document.getElementById('container');

	var PSV = new PhotoSphereViewer({
		// Path to the panorama
		panorama: './images/photo/photo_1.jpg',

		// Container
		container: div,

		// Deactivate the animation
		time_anim: 1000,

		// Display the navigation bar
		navbar: true,

		//加载时显示的图片
		// loading_msg:'ASDHG',

		// Resize the panorama
		size: {
			width: '100%',
			height: '500px'
		}
	});
}
