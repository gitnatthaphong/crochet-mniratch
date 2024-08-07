<div class="row gap-5">

    <div class="col-12">
        <div class="form-group">
            <label for="contact_title" class="form-label">หัวเรื่อง <span class="text-danger">*</span></label>
            <input type="text" name="contact_title" class="form-control" id="contact_title" placeholder="หัวเรื่อง" value="<?= $results['contact_title'] ?>" required autocomplete="off">
            <div class="invalid-feedback">
                กรุณาระบุชื่อหัวเรื่อง
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="contact_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
            <textarea name="contact_detail" class="summernote" placeholder="รายละเอียด" required>
                <?= $results['contact_detail'] ?>
            </textarea>
            <div class="invalid-feedback">
                กรุณาระบุรายละเอียด
            </div>
        </div>
    </div>
</div>