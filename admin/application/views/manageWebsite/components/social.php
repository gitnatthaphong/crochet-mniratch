<div class="row gap-5">

    <div class="col-12">
        <div class="form-group">
            <label for="social_email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="text" name="social_email" class="form-control" id="social_email" placeholder="Email" value="<?= $results['social_email'] ?>" required autocomplete="off">
            <div class="invalid-feedback">
                Email
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="social_facebook" class="form-label">Facebook <span class="text-danger">*</span></label>
            <input type="text" name="social_facebook" class="form-control" id="social_facebook" placeholder="Facebook" value="<?= $results['social_facebook'] ?>" required autocomplete="off">
            <div class="invalid-feedback">
                Facebook
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="social_instagram" class="form-label">Instagram <span class="text-danger">*</span></label>
            <input type="text" name="social_instagram" class="form-control" id="social_instagram" placeholder="Instagram" value="<?= $results['social_instagram'] ?>" required autocomplete="off">
            <div class="invalid-feedback">
                Instagram
            </div>
        </div>
    </div>

</div>