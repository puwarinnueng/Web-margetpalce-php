<!-- หน้าแสดงข้อมูลหลังจากกรอก email แล้ว -->
<br>
<br>

<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="text-align:center;"> Is it work?</h4>
            <table>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Type</th>
                        <th>Price</th>
                    </tr>
                    <?php foreach ($query as $rs) { ?>
                    <tr>
                        <td><?php echo $rs->p_name; ?></td>
                        <td><?php echo $rs->p_type; ?></td>
                        <td><?php echo $rs->p_price; ?></td>
                    </tr>
                    <?php } ?>
            </table>

        </div>
    </div>
</div>