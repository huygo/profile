<!--footer-->
<div class="footer">
		<p>&copy; Copyright 2019 <a href="https://thuonghieuweb.com/" target="_blank">www.thuonghieuweb.com</a></p>
</div>
<!--//footer-->
</div>
<!-- Classie -->
<script src="template/js/classie.js"></script>
<script>
var menuLeft = document.getElementById('cbp-spmenu-s1'),
		showLeftPush = document.getElementById('showLeftPush'),
		body = document.body;

showLeftPush.onclick = function() {
		classie.toggle(this, 'active');
		classie.toggle(body, 'cbp-spmenu-push-toright');
		classie.toggle(menuLeft, 'cbp-spmenu-open');
		disableOther('showLeftPush');
};

function disableOther(button) {
		if (button !== 'showLeftPush') {
				classie.toggle(showLeftPush, 'disabled');
		}
}
</script>
<!--scrolling js-->
<script src="template/js/jquery.nicescroll.js"></script>
<script src="template/js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="template/js/bootstrap.js"></script>
</body>
</html>
