$(function(){
		var uploader = WebUploader.create({

	    // 选完文件后，是否自动上传。
	    auto: false,

	    // swf文件路径
	    swf: BASE_URL + '/webuploader/Uploader.swf',

	    // 文件接收服务端。
	    server: '{:U('Release/add_fangyuan')}',

	    // 选择文件的按钮。可选。
	    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
	    pick: '#filePicker',

	    // 只允许选择图片文件。
	    accept: {
	        title: 'Images',
	        extensions: 'gif,jpg,jpeg,bmp,png',
	        mimeTypes: 'image/*'
	    }
	});
})