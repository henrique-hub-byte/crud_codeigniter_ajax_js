
<body>
    <!-- Modal -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New User</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_name" placeholder="name@example.com">
                        <label for="complete_name">Enter your name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="complete_email" placeholder="name@example.com">
                        <label for="complete_email">Enter your email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_mobile" placeholder="name@example.com">
                        <label for="complete_mobile">Enter your mobile</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="complete_place" placeholder="name@example.com">
                        <label for="complete_place">Enter your place</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="addUser()">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs- dismiss="modal" onclick="closeModal()">Close</button>

                </div>
            </div>
        </div>
    </div>


    <!-- update -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content"> 
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="update_name" placeholder="name@example.com">
                        <label for="update_name">Enter your name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="update_email" placeholder="name@example.com">
                        <label for="update_email">Enter your email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="update_mobile" placeholder="name@example.com">
                        <label for="update_mobile">Enter your mobile</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="update_place" placeholder="name@example.com">
                        <label for="update_place">Enter your place</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" onclick="updateDetails()">Update</button>
                    <button type="button" class="btn btn-danger" data-bs- dismiss="modal" onclick="closeModal()">Close</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>
    


    <div class="container my-3 mx-6">
        <h1 class="text-center">PHP CRUD operations using bootstrap modal</h1>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#completeModal">
            Adde New Users
        </button>
        <div id="displayDataTable">
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Incluir seu arquivo JavaScript -->
    <script src="<?php echo base_url('public/js/register.js'); ?>"></script>


</body>