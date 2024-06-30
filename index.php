<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-วรชัย</title>
</head>
<body>
    <?php
    $stlist = ["นายชยางกูร ขำเถื่อน", "นายไชยวัฒน์ มิตรานนท์", "นายวโรดม กุนเรือง", "นายอภิวิชญ์ ชนะชล", "นายชานนท์ ชาวชายโขง", "นายนพดล ละดาดก", "นายชินกฤช ธนกรณ์กุล", "นายพงศ์ภรณ์ สุนทรานุรักษ์", "นายพรเทพ เอมอมร", "นายวรชัย เจนจบวิทยา", "นายสรวิชญ์ สิทธิบวรสกุล", "นายไชยวัฒน์ จัดเจนนาวี", "นายวงศ์วริศ ชัยกุลประดิษฐ์", "นายคณิศร ศักดิ์ทอง", "นายธนวัฒน์ ลบช้าง", "นายแทนไท จันทร์ขจร", "นายปรัญชัย เพชรแสงโรจน์", "นายพัทธดนย์ สุวรรณรัตน์", "นายสัณหณัฐ ครองธรรมศิริ", "นายจิรภัทร ภูบรรทัด", "นายจิรานุวัฒน์ ขันธ์นิตย์", "นายสิปปกร จันทร์พุ่ม", "นายอชิรวัตติ์ ศรีรัตนาม", "นายปณิทัศน์ แซ่เจียม", "นายกันตพัฒน์ โตใหญ่", "นายชุติเดช เทิดสถิตบุญฤทธิ์", "นายวชิรวิชญ์ ตะเภาทอง", "นายพุฒิเกียรติ แก้วกล้า", "นายศุภโชค ปิยเจริญสิทธิ์", "นางสาวสุภาวิตา บุญโภคอุดม", "นางสาวพิมพ์ชนก สุขนุ่ม", "นางสาววรณัน บุหงาเกษมสุข", "นางสาวอภิชญา ตะโกจีน", "นางสาวนัทธมน วชิรสุดเลขา", "นางสาวสิรินดา อยู่เมฆ", "นางสาวปภาดา เหลืองประภา", "นางสาวณัฐชา เท้าสมบุญ", "นางสาวธัญชนก สุดธง", "นางสาวกัญญวรา สายโส", "นางสาวนภัสสร กิจจารักษ์"];

    $no = 10;
    $min = $no - 1;
    $st = range($no, 40);
    foreach ($st as $num) {
        if (isset($stlist[$num-1])) {
            echo $stlist[$num-1] . " เลขที่ $num <br>";
        }
    }
    ?>
</body>
</html>
