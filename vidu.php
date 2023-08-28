<!DOCTYPE html PUBLIC "-
//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/
xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="ContentType" content="text/html; charset=utf-8" />
    <title>Chào các bạn</title>
</head>

<body>
    <?php
    if (
        !empty(filter_input(INPUT_POST, 'action'))
        && filter_input(INPUT_POST, 'action') == 'demo'
    ) {
        $ten = filter_input(INPUT_POST, 'ten');
        $xuat_ten = "Chào bạn " . $ten;
    }
    ?>
    <form action="vidu.php" method="post">
        <input type="hidden" name="action" value="demo">
        <table width="271" border="1">
            <tr>
                <td colspan="2" bgcolor="#336699"><strong>In lời chào</strong></td>
            </tr>
            <tr>
                <td width="91">Họ tên bạn</td>
                <td width="164">
                    <input type="text" name="ten" id="chao3" value="<?php if (!empty($ten)) echo $ten; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label>
                        <?php if (!empty($xuat_ten)) echo $xuat_ten; ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" valign="middle">
                    <input type="submit" name="chao" id="chao" value="Xuất" />
                </td>
            </tr>
        </table>
    </form>
</body