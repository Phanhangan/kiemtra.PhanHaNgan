//Bài 1:
<?php
echo "Các số chẵn từ 1 đến 10 là: ";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
echo "\n";
?>

//Bài 2:
<?php
function kiemTraNguyenTo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Kiểm tra thử với một số
$soCanKiemTra = 7;
if (kiemTraNguyenTo($soCanKiemTra)) {
    echo $soCanKiemTra . " là số nguyên tố.\n";
} else {
    echo $soCanKiemTra . " không phải là số nguyên tố.\n";
}
?>

//Bài 3:
<?php
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "*";
        }
        echo "\n"; 
    }
}

// Gọi hàm với chiều rộng 5 và chiều cao 3
inHinhChuNhat(5, 3);
?>