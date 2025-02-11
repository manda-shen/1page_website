// JavaScript Document
$(document).ready(function (e) {
	$(".mainmu").mouseover(
		function () {
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function () {
			$(this).children(".mw").hide()
		}
	)
});
function lo(x) {
	location.replace(x)
}
function op(x, y, url) {
	console.log("開啟視窗:", x, y, url); // 🔍 偵錯用
	$(x).fadeIn();
	if (y) $(y).fadeIn();
	if (y && url) {
		$(y).load(url, function (response, status, xhr) {
			if (status == "error") {
				console.error("載入失敗:", xhr.status, xhr.statusText);
			} else {
				console.log("載入成功:", url);
				console.log("回應內容:", response);
			}
		});
	}
}
function cl(x) {
	$(x).fadeOut();
}
function updateIcon() {
	let selectedIcon = document.getElementById("icon_class").value;
	document.getElementById("iconPreview").className = selectedIcon;
}

function previewImage(input, previewId) {
	const preview = document.getElementById(previewId);
	preview.innerHTML = ''; // 清空預覽區域

	if (input.files && input.files[0]) {
		const reader = new FileReader();

		reader.onload = function (e) {
			const img = document.createElement('img');
			img.src = e.target.result;
			img.style.width = '250px';
			preview.appendChild(img);
		}

		reader.readAsDataURL(input.files[0]);
	}
}