<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('product')->insert([
            ['name' => 'Danh Pháp Trong Chúa Tể Những Chiếc Nhẫn (Tái Bản 2020)','img'=>'uploads/1.jpg',
             'price' => 17000,'priceSale'=>20000,'nhacungcap'=>'Nhã Nam','nhaxuatban'=>'NXB Văn Học',
            'tacgia'=>'J R R Tolkien','moTa'=>'Danh pháp trong Chúa tể những chiếc Nhẫn kèm theo danh mục đối chiếu tên riêng Việt-Anh

            Tài liệu “Danh pháp trong Chúa tể những chiếc Nhẫn” (“Nomenclature of The Lord of the Rings”) do J. R. R. Tolkien biên soạn vào năm 1967! Một nguồn tham khảo đáng-tham-khảo để đọc Chúa tể những chiếc nhẫn.','hot'=>1,'hidden'=>1,'idCategory'=>'1','tomTat'=>''],
            
            ['name' => 'Thơ Hồ Xuân Hương (Sách Bỏ Túi)','img'=>'uploads/2.jpg',
             'price' => 21250,'priceSale'=>25000,'nhacungcap'=>'CÔNG TY CỔ PHẦN SÁCH TRÍ THỨC VIỆT','nhaxuatban'=>'NXB Văn Học',
            'tacgia'=>'Hồ Xuân Hương','moTa'=>'hơ Hồ Xuân Hương (Sách Bỏ Túi) Hồ Xuân Hương là một hiện tượng phức tạp, cuộc đời và sự nghiệp sáng tác của bà có đã tốn không ít giấy mực của các nhà nghiên cứu cũng như bao nhiêu những thắc mắc, hoài nghi trong lòng độc giả. Thậm chí đến ngày nay, những thắc mắc cần lời giải đáp đó vẫn chưa có hồi kết thúc. Từ đó cho thấy, cuộc đời và sự nghiệp của Hồ Xuân Hương quả là một hiện tượng văn hóa hết sức độc đáo. Điều này đã trở thành một chủ đề hấp dẫn cho các nhà nghiên cứu khám phá. Được mệnh danh là “bà chúa thơ Nôm”, sáng tác của nữ sĩ đóng góp quan trọng đối với sự phát triển thơ Nôm dân tộc. Trong “gia tài” thơ Nôm của mình, Hồ Xuân Hương đặc biệt thành công với mảng thơ trào phúng, đả kích.','hot'=>1,'hidden'=>1,'idCategory'=>'1','tomTat'=>''],
            
            ['name' => 'Viết Cho Những Điều Bé Nhỏ - Thì Thầm Tiếng Cát','img'=>'uploads/3.jpg',
             'price' => 22100,'priceSale'=>26000,'nhacungcap'=>'Nhà Xuất Bản Kim Đồng','nhaxuatban'=>'NXB Kim Đồng',
            'tacgia'=>'Nguyễn Hữu Quý','moTa'=>'Viết Cho Những Điều Bé Nhỏ - Thì Thầm Tiếng Cát

            Mỗi con người chỉ có một quê hương máu thịt, đó là định mệnh không thể lựa chọn, đổi thay. Điều ấy cắt nghĩa vì sao dù ở góc bể chân trời nào người ta vẫn thường hay nhớ thương quê hương và đa mang thao thức một thuở xa rồi…
            
            “Thì thầm tiếng cát” là tâm sự của tác giả, nhà thơ Nguyễn Hữu Quý, về thời thơ ấu ăm ắp kỉ niệm của ông nơi miền quê Quảng Bình đầy cát trắng, nắng và gió. Từ những buổi chiều chăn trâu cắt cỏ, trò chơi đồ hàng, đánh trận giả, nỗi sợ ma, sự bỡ ngỡ ngày đầu đi học, niềm vui khi được điểm 10, sự hân hoan khi được nhận bao lì xì đỏ thắm đến những biến cố thay đổi cuộc đời. Bạn đọc sẽ tìm thấy một phần của mình trong những kí ức sống động về tuổi thơ qua lời văn giàu cảm xúc, thấm đượm tình người…','hot'=>1,'hidden'=>1,'idCategory'=>'1','tomTat'=>''],
            
            // ['name' => 'Danh Pháp Trong Chúa Tể Những Chiếc Nhẫn (Tái Bản 2020)','img'=>'uploads/1.jpg',
            //  'price' => 17000,'priceSale'=>20000,'nhacungcap'=>'Nhà Xuất Bản Kim Đồng','nhaxuatban'=>'NXB Kim Đồng',
            // 'tacgia'=>'J R R Tolkien','moTa'=>'','hot'=>1,'hidden'=>1,'idCategory'=>'','tomTat'=>''],
            
            
            
            

         ]);
    }
}
