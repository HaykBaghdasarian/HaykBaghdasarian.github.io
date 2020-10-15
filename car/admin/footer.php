<footer class="footer">
                                        <div class="container">
                                            <nav>
                                                
                                                <p class="copyright text-center">
                                                   &copy WEBEX TECHNOLOGIES LLC &copy 2005-
                                                    <script>
                                                        document.write(new Date().getFullYear())
                                                    </script>
                                                </p>
                                            </nav>
                                        </div>
                                    </footer>
                                </div>
                            </div>


                            
</body>
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>-->
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/core/popper.min.js" type="text/javascript"></script>-->
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/core/bootstrap.min.js" type="text/javascript"></script>-->
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/plugins/bootstrap-table.js"></script>-->
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/plugins/jquery.dataTables.min.js"></script>-->
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/base_checklist.js"></script>-->
<!--<script src="--><?//=$basePath;?><!--/admin/assets/js/light-bootstrap-dashboard.js"></script>-->
<script>
    $('.del_inf').click(function(){
        var table_name = $(this).attr('name');
        var id = $(this).attr('id');
        $('.del_inf2').click(function(){
            $.post(
            "../delete_info.php",
            {table_name:table_name, id:id},
            function(ard){
                location.href="http://breast.am/admin/"+table_name+"/index1.php";
            }
        )
        })
    })
</script>
