@if (!$isLogin) {{ showFormForLogin() }}
@else {{ showFormForChangePassword() }}
@endif
@section('script')
<script type="text/javascript">
    
        function login() {
            $("#email,#password").removeClass('is-invalid');
            $('div#errorlogin').html('');
            if (!validateLogin()){
                return;
            }

            $.ajax({
                url: "{{ route('login') }}",
                type: 'POST',
                async: true,
                cache: false,
                data: {email: jQuery('input#email').val(), password: jQuery('input#password').val(),_token: "{{ csrf_token() }}"},
                success: function (data, textStatus, jqXHR) {
                     if ($.trim(data) == 'success') {
                         $("#loginModal").modal("hide");
                        window.location.reload();
                    } else if ($.trim(data) == 'error') {
                        $('div#errorlogin').html('You have entered an invalid email or password');
                    }       
                }
            });
        }
        
        function validateLogin() {

            if ($.trim($("#email").val()) == '') {
                $("#email").addClass('is-invalid').focus();
                return false;
            }
            if ($.trim($("#email").val()).indexOf(" ", 0) != -1) {
                $("#email").addClass('is-invalid').focus();
                return false;
            }
            if ($.trim($("#password").val()) == '') {
                $("#password").addClass('is-invalid').focus();
                return false;
            }

            return true;
        }
        
        function changePassword() {
            $("#oldPassword,#newPassword,#confirmNewPassword").removeClass('is-invalid');
            $('div#errorChangePassword').html('');
            if (!validateChangePassword()){
                return;
            }

            $.ajax({
                url: "{{ route('changePassword') }}",
                type: 'POST',
                async: true,
                cache: false,
                data: {oldPassword: jQuery('input#oldPassword').val(), newPassword: jQuery('input#newPassword').val(),_token: "{{ csrf_token() }}"},
                success: function (data, textStatus, jqXHR) {
                     if ($.trim(data) == 'success') {
                        window.location.reload();

                    } else if ($.trim(data) == 'error') {
                        $('div#errorChangePassword').html('The old password was incorrect');
                    }       
                }
            });
        }
        
        function validateChangePassword() {
            if ($("#oldPassword").val()==""){
                $("#oldPassword").addClass('is-invalid').focus();
                return false;
            }
            if ($("#newPassword").val()==""){
                $("#newPassword").addClass('is-invalid').focus();
                return false;
            }
            if ($("#newPassword").val().indexOf(" ", 0) != -1) {
                $("#newPassword").addClass('is-invalid').focus();
                return false;
            }
            if ($("#confirmNewPassword").val() == "") {
                $("#confirmNewPassword").addClass('is-invalid').focus();
                return false;
            }
            if ($("#newPassword").val() != $("#confirmNewPassword").val()) {
                jQuery('div#errorChangePassword').html('Passwords must match');
                $("#newPassword").addClass('is-invalid').focus();
                $("#confirmNewPassword").addClass('is-invalid').focus();
                return false;
            }
            return true;
        }
        $('#dialog-form-login input').keypress(function(e) {
            if (e.charCode == 13) {
              login();
            }
        });
        
        $('#dialog-form-change-password input').keypress(function(e) {
            if (e.charCode == 13) {
              changePassword();
            }
        });
        
</script>
@endsection

<?php 
function showFormForLogin(){?>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="loginModalLabel">Sign in</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="dialog-form-login">
                        <div id="errorlogin" class="col-sm-12 text-center btn-danger m-2 rounded"></div>

                        <div class="form-row">
                            <label class="col-sm-3 col-form-label" for="email">email:</label>
                            <input type="text" class="form-control col-sm-9" name="email" id="email"/>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-3 col-form-label" for="password">password:</label>
                            <input type="password" class="form-control col-sm-9" name="password" id="password"/>
                        </div>

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="login();">Sign in</button>
                </div>
            </div>
        </div>
    </div>
<?php 
}


function showFormForChangePassword(){?>
    <div class="modal fade" id="changePassModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="changePasswordModalLabel">Change Password</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="dialog-form-change-password">
                        <div id="errorChangePassword" class="col-sm-12 text-center btn-danger m-2 rounded"></div>

                        <div class="form-row">
                            <label class="col-sm-3 col-form-label" for="oldPassword">Old Password:</label>
                            <input type="password" class="form-control col-sm-9" name="oldPassword" id="oldPassword"/>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-3 col-form-label" for="newPassword">New Password:</label>
                            <input type="password" class="form-control col-sm-9" name="newPassword" id="newPassword"/>
                        </div>
                        <div class="form-row">
                            <label class="col-sm-3 col-form-label" for="confirmNewPassword">New Password (again):</label>
                            <input type="password" class="form-control col-sm-9" name="confirmNewPassword" id="confirmNewPassword"/>
                        </div>

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="changePassword();">Save</button>
                </div>
            </div>
        </div>
    </div>

<?php 
}
?>