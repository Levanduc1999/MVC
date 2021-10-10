<h1>Tasks</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/MVC/student/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>ID</th>
            <th>Ten</th>
            <th>Tuoi</th>
            <th>Dia chi</th>
            <th>Ngay sinh</th>
            <th>Gioi tinh</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($students as $student)
        {
            echo '<tr>';
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['ten'] . "</td>";
            echo "<td>" . $student['tuoi'] . "</td>";
            echo "<td>" . $student['diachi'] . "</td>";
            echo "<td>" . $student['ngaysinh'] . "</td>";
            echo "<td>" . $student['gioitinh'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC/student/edit/" . $student["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC/student/delete/" . $student["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>