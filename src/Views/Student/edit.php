<h1>Edit Student</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="ten">Ten</label>
        <input type="text" class="form-control" id="ten" placeholder="Enter a title" name="ten" value ="<?php if (isset($students["ten"])) echo $students["ten"];?>">
    </div>

    <div class="form-group">
        <label for="tuoi">Tuoi</label>
        <input type="text" class="form-control" id="tuoi" placeholder="Enter a tuoi" name="tuoi" value ="<?php if (isset($students["tuoi"])) echo $students["tuoi"];?>">
    </div>

    <div class="form-group">
        <label for="diachi">Dia chi</label>
        <input type="text" class="form-control" id="diachi" placeholder="Enter a diachi" name="diachi" value ="<?php if (isset($students["diachi"])) echo $students["diachi"];?>">
    </div>

    
    <div class="form-group">
        <label for="ngaysinh">Ngay sinh</label>
        <input type="text" class="form-control" id="ngaysinh" placeholder="Enter a ngaysinh" name="ngaysinh" value ="<?php if (isset($students["ngaysinh"])) echo $students["ngaysinh"];?>">
    </div>

    
    <div class="form-group">
        <label for="gioitinh">Gioi tinh</label>
        <input type="text" class="form-control" id="gioitinh" placeholder="Enter a gioitinh" name="gioitinh" value ="<?php if (isset($students["gioitinh"])) echo $students["gioitinh"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>