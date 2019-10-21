<?php
    include('functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>96221033111048</title>
</head>
<body dir="rtl" style="background-color: black; color: white;">
    <h1>
        سپهر کریمی صدیق 96221033111048 سه شنبه 11 - 15
    </h1>
    <h3 style="color: red;">
        برای تغییر اعداد صفحه را refresh کنید
    </h3>
    
    <div>
        <p> شبیه سازی برای خرید 70 روزنامه </p>
        <table width="1000" border="1">
            <thead>
            <tr>
                <th>روز</th>
                <th>ارقام تصادفی برای تعیین نوع روز</th>
                <th>نوع روز</th>
                <th>ارقام تصادفی برای تقاضا</th>
                <th>تقاضا</th>
                <th>درآمد حاصل از فروش</th>
                <th> سود از دست رفته به خاطر فزونی تقاضا</th>
                <th>درآمد ناشی از فروش به قیمت باطله</th>
                <th>سود روزانه</th>
            </tr>
            </thead>
            <?php for ($i = 1; $i <= 20; $i++) { ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $randDayState = rand(1, 100); ?></td>
                    <td><?php echo $state = getDay($randDayState); ?></td>
                    <td><?php echo $randDayRequest = rand(1, 100); ?></td>
                    <td><?php echo $request = getRequest($randDayRequest, $state); ?></td>
                    <td><?php $sale = $request * 20;
                        if ($request > 70) {
                            echo 1400;
                        } else {
                            echo $sale;
                        } ?></td>
                    <td><?php if ($request > 70) {
                            echo $uping = ($request - 70) * 7;
                        } else {
                            echo 0;
                        } ?></td>
                    <td><?php if ($request < 70) {
                            echo $downing = (70 - $request) * 2;
                        } else {
                            echo 0;
                        } ?></td>
                    <td><?php echo $final = $sale - 910 - $uping + $downing; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <hr/>
    <div>
        <table width="500" border="1">
            <p> توزیع روزنامه های مورد تقاضا  </p>
            <tr>
                <td>بد</td>
                <td>متوسط</td>
                <td>خوب</td>
                <td>تقاضا</td>
            </tr>
            <tr>
                <td>0.44</td>
                <td>0.10</td>
                <td>0.03</td>
                <td>40</td>
            </tr>
            <tr>
                <td>0.22</td>
                <td>0.18</td>
                <td>0.05</td>
                <td>50</td>
            </tr>
            <tr>
                <td>0.16</td>
                <td>0.40</td>
                <td>0.15</td>
                <td>60</td>
            </tr>
            <tr>
                <td>0.12</td>
                <td>0.20</td>
                <td>0.20</td>
                <td>70</td>
            </tr>
            <tr>
                <td>0.06</td>
                <td>0.08</td>
                <td>0.35</td>
                <td>80</td>
            </tr>
            <tr>
                <td>0.00</td>
                <td>0.04</td>
                <td>0.15</td>
                <td>90</td>
            </tr>
            <tr>
                <td>0.00</td>
                <td>0.00</td>
                <td>0.07</td>
                <td>100</td>
            </tr>
        </table>
        <br>
        <table width="500" border="1">
            <p>تخصیص ارقام تصادفی برای تعیین نوع روز</p>
            <tr>
                <th>تخصیص ارقام تصادفی</th>
                <th>احتمال تجمعی</th>
                <th>احتمال</th>
                <th>نوع روز</th>
            </tr>
            <tr>
                <td>01-35</td>
                <td>0.35</td>
                <td>0.35</td>
                <td>خوب</td>
            </tr>
            <tr>
                <td>36-80</td>
                <td>0.80</td>
                <td>0.45</td>
                <td>متوسط</td>
            </tr>
            <tr>
                <td>81-100</td>
                <td>1.00</td>
                <td>0.20</td>
                <td>بد</td>
            </tr>
        </table>
        <br>
        <table width="600" border="1">
            <p>تخصیص ارقام تصادفی برای روزنامه های مورد تقاضا</p>
            <thead>
            <tr>
                <th colspan="3">تخصیص اعداد تصادفی</th>
                <th colspan="3">توزیع تجمعی</th>
                <th>تقاضا</th>
            </tr>
            <tr>
                <th>بد</th>
                <th>متوسط</th>
                <th>خوب</th>
                <!--  -->
                <th>بد</th>
                <th>متوسط</th>
                <th>خوب</th>
                <!--  -->
                <th>----</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01-44</td>
                <td>01-10</td>
                <td>01-03</td>
                <td>0.44</td>
                <td>0.10</td>
                <td>0.03</td>
                <td>40</td>
            </tr>
            <tr>
                <td>45-66</td>
                <td>11-28</td>
                <td>04-08</td>
                <td>0.66</td>
                <td>0.28</td>
                <td>0.08</td>
                <td>50</td>
            </tr>
            <tr>
                <td>67-82</td>
                <td>29-68</td>
                <td>09-23</td>
                <td>0.82</td>
                <td>0.68</td>
                <td>0.23</td>
                <td>60</td>
            </tr>
            <tr>
                <td>83-82</td>
                <td>69-88</td>
                <td>24-43</td>
                <td>0.96</td>
                <td>0.88</td>
                <td>0.43</td>
                <td>70</td>
            </tr>
            <tr>
                <td>95-100</td>
                <td>89-96</td>
                <td>44-78</td>
                <td>1.00</td>
                <td>0.96</td>
                <td>0.78</td>
                <td>80</td>
            </tr>
            <tr>
                <td>--</td>
                <td>97-100</td>
                <td>79-93</td>
                <td>1.00</td>
                <td>1.00</td>
                <td>0.93</td>
                <td>90</td>
            </tr>
            <tr>
                <td>--</td>
                <td>--</td>
                <td>94-100</td>
                <td>1.00</td>
                <td>1.00</td>
                <td>1.00</td>
                <td>100</td>
            </tr>
            </tbody>
        </table>
    </div>    
</body>
</html>