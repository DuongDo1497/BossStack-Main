<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <table cellpadding=0 cellspacing=14 style="width:100%;font-family:Arial;font-size:13px;">
        <tr>
            <td width='50%'>
            Kính gửi: Quý khách (Dear Mr./Ms.) <b><?php echo e($usercustomer->name, false); ?></b>
            </td>
        </tr>
        <tr>
            <td colspan='2'>Dịch vụ Giao dịch trực tuyến của Fiinves cho tài khoản của Quý khách đã được kích hoạt.</td>
        </tr>
        <tr>
            <td colspan='2'>(Your Fiinves Online Trading account has been created).</td>
        </tr>
        <tr>
            <td colspan='2'>
            - Email đăng nhập (Email ID): <b><?php echo e($usercustomer->email, false); ?></b>
            </td>
        </tr>
<!--
        <tr>
            <td colspan='2'>
            - Mật khẩu đăng nhập (Password): <b><?php echo e($userpassword, false); ?></b>
            </td>
        </tr>
-->
        <tr>
            <td colspan='2'>
            - Ngày hiệu lực từ (Effective date): <b><?php echo e($usercustomer->begin_at == null ? "" : ConvertSQLDate($usercustomer->begin_at), false); ?></b>
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            Quý khách có thể truy cập vào hệ thống giao dịch trực tuyến Fiinves và tham khảo hướng dẫn sử dụng theo đường dẫn dưới đây: 
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            (You can access Fiinves Online Trading and consult the manual by clicking on the link below)
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            <font color='#0000FF'><b>Truy cập giao dịch trực tuyến Fiinves tại địa chỉ:</b></font> fiinves.vn
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            Mọi yêu cầu cần giải đáp, Xin Quý khách vui lòng liên hệ với <b> Phòng chăm sóc khách hàng Công ty</b>. 
            </td>
        </tr>
        <tr>
            <td colspan='2'> 
            (Please contact <b>Customer Department</b>).
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            <b>Thông tin liên hệ (Contact Center):</b>
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            Điện thoại: <b>0918 90 55 00</b>
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            <b>Website: fiinves.vn Email: info@fiinves.vn</b>
            </td>
        </tr>
        <tr>
            <td colspan='2'>
             Trân trọng /Best regards;
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            Phòng chăm sóc khách hàng/Customer Department
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            <b>CÔNG TY TNHH LAMIAN TRADING</b>
            </td>
        </tr>
        <tr>
            <td colspan='2'>
            *******************************************************************
            </td>
        </tr>
    </table>

</body>
</html>
