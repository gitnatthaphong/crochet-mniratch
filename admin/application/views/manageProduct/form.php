<style>
    .previewImage {
        width: 100%;
        max-height: 300px;
        overflow: scroll;
        margin-top: 10px;
        display: none;
    }

    .previewImage img {
        max-width: 400px;
        max-height: 400px;
        object-fit: contain;
    }
</style>

<div class="container-fluid py-1 pb-4 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5  text-white" href="<?= LINK ?>">หน้าหลัก</a></li>
            <li class="breadcrumb-item text-sm text-white">
                <a class="breadcrumb-item text-sm text-white opacity-5 " href="<?= $action_link ?>"><?= $titlePage ?></a>
            </li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $titlePageAction ?></li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0"><?= $titlePage ?></h6>
    </nav>
</div>

<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card customCard">
            <form action="<?= $action_link ?>save/<?= $id ?>" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                <div class="row gy-2">
                    <?php if(!empty(validation_errors())) : ?>
                    <div class="col-12">
                        <div class="alert alert-danger">
                            <small class="text-danger text-validate-ci"><?php echo validation_errors(); ?></small>
                        </div>
                    </div>
                    <?php endif; ?>

                    <div class="col-12">
                        <label for="product_name" class="form-label">ชื่อสินค้า <span class="text-danger">*</span></label>
                        <input type="text" name="product_name" value="<?= !empty($results) ? $results['product_name'] : '' ?>" class="form-control" id="product_name" placeholder="ชื่อสินค้า" required>
                        <div class="invalid-feedback">
                            กรุณาระบุชื่อสินค้า
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="product_tags" class="form-label">แท็ก <span class="text-danger">*</span></label>
                        <input type="text" name="product_tags" value="<?= !empty($results) ? $results['product_tags'] : '' ?>" class="form-control form-tags" id="example" data-ub-tag-enter placeholder="พิมพ์แล้วกด Enter" required>
                        <div class="invalid-feedback">
                            กรุณาระบุแท็ก
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="product_image" class="form-label">รูปภาพสินค้า <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="product_image" name="product_image" placeholder="รูปภาพสินค้า" accept="image/*" <?= !empty($results) && !empty($results['image_path']) ? '' : 'required' ?>>

                        <div class="previewImage text-center">
                            <img class="previewBash" id="previewBash" src="<?= !empty($results) && !empty($results['image_path']) ? $results['image_path'] : '' ?>">
                            <?php if(!empty($results) && !empty($results['image_path'])) : ?>
                                <input type="hidden" name="old_product_image" value="<?= $results['image_path'] ?>">
                            <?php endif ?>
                        </div>

                        <div class="invalid-feedback">
                            กรุณาอัพโหลดรูปภาพสินค้า
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="status">สถานะ <span class="text-danger">*</span></label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="status" id="status_1" <?= (!empty($results) && $results['status'] == 1) || $id == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="status_1">
                                    เผยแพร่
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" name="status" id="status_0" <?= !empty($results) && $results['status'] == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="status_0">
                                    ไม่เผยแพร่
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center mt-3">
                            <a class="btn btn-secondary" href="<?= $action_link ?>" title="ยกเลิก">ยกเลิก</a>
                            <button type="submit" class="btn btn-success" title="บันทึก">บันทึก</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    UseBootstrapTag(document.getElementById('example'))

    // tinymce.init({
    //     selector: 'textarea#tiny',
    //     plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
    //     height: 600,
    //     toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
    //     menubar: 'file edit view insert format tools table help',
    // });


    $(document).ready(function() {

        <?php if(!empty($results) && !empty($results['image_path'])) : ?>
            $('.previewImage').fadeIn();
        <?php endif; ?>

        $('#product_image').on('change', function(event) {
            $('.previewImage').fadeIn();
            $('#previewBash').attr('src', URL.createObjectURL(event.target.files[0]));
        })


        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
        

        
    })
</script>