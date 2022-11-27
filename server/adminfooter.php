         <div class="footer-wrapper">
         	<div class="footer-section f-section-1">
         		<p class="">Copyright © <script>
         				document.write(new Date().getFullYear())

         			</script> C&amp;I Investments. All rights reserved.</p>
         	</div>
         </div>
         </div>
         <!--  END CONTENT AREA  -->




         </div>
         <!-- END MAIN CONTAINER -->



         <script src="assets/js/jquery-3.1.1.min.js"></script>
         <script src="assets/js/popper.min.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="assets/js/perfect-scrollbar.min.js"></script>
         <script src="assets/js/app.js"></script>
         <script>
         	$(document).ready(function() {
         		App.init();
         	});

         </script>

         <script src="assets/js/datatables.js"></script>
         <script>
         	$('#default-ordering').DataTable({
         		"dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
         			"<'table-responsive'tr>" +
         			"<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
         		"oLanguage": {
         			"oPaginate": {
         				"sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
         				"sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
         			},
         			"sInfo": "Showing page _PAGE_ of _PAGES_",
         			"sSearchPlaceholder": "Search...",
         			"sLengthMenu": "Results :  _MENU_",
         		},
         		"order": [
         			[3, "desc"]
         		],
         		"stripeClasses": [],
         		"lengthMenu": [5, 10, 20, 50],
         		"pageLength": 5,
         		drawCallback: function() {
         			$('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered');
         		}
         	});

         </script>

         <script src="assets/js/custom.js"></script>
         <script src="assets/js/dash_1.js"></script>
         <script src="ckeditor/ckeditor.js" type="text/javascript"></script>
         <script type="text/javascript">
         	CKEDITOR.replace('richtext');

         </script>
         </body>

         </html>
