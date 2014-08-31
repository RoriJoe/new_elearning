
<?php echo form_open_multipart('admin/siswa/add/'.$status_id, array('class' => 'form-horizontal row-fluid')); ?>
    <div class="control-group">
        <label class="control-label">NIS <span class="text-error">*</span></label>
        <div class="controls">
            <input type="text" id="nis" name="nis" class="span4" value="<?php echo set_value('nis'); ?>">
            <br><?php echo form_error('nis'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Nama <span class="text-error">*</span></label>
        <div class="controls">
            <input type="text" name="nama" class="span8" value="<?php echo set_value('nama'); ?>">
            <br><?php echo form_error('nama'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Jenis Kelamin <span class="text-error">*</span></label>
        <div class="controls">
            <label class="radio inline"><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo set_radio('jenis_kelamin', 'Laki-laki'); ?>> Laki-laki</label>
            <label class="radio inline"><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo set_radio('jenis_kelamin', 'Perempuan'); ?>> Perempuan</label>
            <br><?php echo form_error('jenis_kelamin'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Tahun Masuk <span class="text-error">*</span></label>
        <div class="controls">
            <input type="text" name="tahun_masuk" class="span2" maxlength="4" value="<?php echo set_value('tahun_masuk'); ?>">
            <br><?php echo form_error('tahun_masuk'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Kelas <span class="text-error">*</span></label>
        <div class="controls">
            <select class="span3" name="kelas_id">
                <?php foreach ($kelas as $k): ?>
                    <option value="<?php echo $k['id'] ?>" <?php echo set_select('kelas_id', $k['id']); ?>><?php echo $k['nama']; ?></option>
                <?php endforeach; ?>
            </select>
            <br><?php echo form_error('kelas_id'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Tempat Lahir</label>
        <div class="controls">
            <input type="text" name="tempat_lahir" class="span5" value="<?php echo set_value('tempat_lahir'); ?>">
            <br><?php echo form_error('tempat_lahir'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Tanggal Lahir</label>
        <div class="controls">
            <select class="span2" style="width: 10%;" name="tgl_lahir">
                <option value="">Tgl</option>
                <?php for ($i = 1; $i <= 31; $i++): ?>
                    <option value="<?php echo $i; ?>" <?php echo set_select('tgl_lahir', $i); ?>><?php echo $i; ?></option>
                <?php endfor; ?>
            </select>
            <select class="span2" style="width: 17%;" name="bln_lahir">
                <option value="">Bulan</option>
                <?php $label_bulan = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'); ?>
                <?php for ($i = 1; $i <= 12; $i++): ?>
                    <option value="<?php echo $i; ?>" <?php echo set_select('bln_lahir', $i); ?>><?php echo $label_bulan[$i]; ?></option>
                <?php endfor; ?>
            </select>
            <input type="text" name="thn_lahir" class="span2" maxlength="4" value="<?php echo set_value('thn_lahir'); ?>" placeholder="Tahun">
            <br><?php echo form_error('thn_lahir'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Agama</label>
        <div class="controls">
            <select name="agama" class="span2">
                <option value="">--pilih--</option>
                <option value="ISLAM" <?php echo set_select('agama', 'ISLAM'); ?>>ISLAM</option>
                <option value="KRISTEN" <?php echo set_select('agama', 'KRISTEN'); ?>>KRISTEN</option>
                <option value="KATOLIK" <?php echo set_select('agama', 'KATOLIK'); ?>>KATOLIK</option>
                <option value="HINDU" <?php echo set_select('agama', 'HINDU'); ?>>HINDU</option>
                <option value="BUDHA" <?php echo set_select('agama', 'BUDHA'); ?>>BUDHA</option>
            </select>
            <br><?php echo form_error('agama'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Alamat</label>
        <div class="controls">
            <textarea name="alamat" class="span8"><?php echo set_value('alamat'); ?></textarea>
            <br><?php echo form_error('alamat'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Foto</label>
        <div class="controls">
            <input type="file" name="userfile">
            <?php echo (!empty($error_upload)) ? $error_upload : ''; ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Username <span class="text-error">*</span></label>
        <div class="controls">
            <input type="text" id="username" name="username" class="span5" value="<?php echo set_value('username'); ?>" placeholder="example@example.sch.id">
            
            <script type="text/javascript">
            function username_default() {
                if (document.getElementById("default_username").checked) {
                    var nis = $("#nis").val();
                    if (nis == '') {
                        nis = new Date().getTime();
                    }
                    $("#username").val(nis + '@example.sch.id');
                } else {
                    $("#username").val('');
                }
            }
            </script>
            <label class="checkbox inline"><input type="checkbox" name="default_username" id="default_username" onclick="username_default()" value="1" <?php echo set_checkbox('default_username', '1'); ?>> Gunakan default username</label>
            <br><?php echo form_error('username'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Password <span class="text-error">*</span></label>
        <div class="controls">
            <input type="password" name="password" class="span5" value="<?php echo set_value('password'); ?>">
            <br><?php echo form_error('password'); ?>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label">Ulangi Password <span class="text-error">*</span></label>
        <div class="controls">
            <input type="password" name="password2" class="span5" value="<?php echo set_value('password2'); ?>">
            <br><?php echo form_error('password2'); ?>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn btn-primary">Simpan</button> 
            <a href="{site_url}/admin/siswa/list/<?php echo $status_id; ?>" class="btn">Batal</a>
        </div>
    </div>
</form>