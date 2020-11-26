<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('news') -> truncate();
        \Illuminate\Support\Facades\DB::table('news') -> insert([
            [
                'id' => '1',
                'title' => 'Thực phẩm bổ sung là gì ? Top 5 thực phẩm bổ sung dành cho người tập gym , thể hình .',
                'summary' => 'Thuật ngữ “THỰC PHẨM BỔ SUNG” có lẽ đã quá quen với tất cả chúng ta đặc biệt là các bạn tập luyện thể hình, chơi thể thao. Nhưng để hiểu chính xác, cụ thể vể nó thì rất ít người biết.[...]',
                'content' => '<h2><strong>Thực Phẩm Bổ Sung l&agrave; g&igrave;?</strong></h2>

                                        <p>Thuật ngữ&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;bắt nguồn từ Mỹ v&agrave;o năm 1994, do cục quản l&yacute; thực phẩm v&agrave; thuốc Mỹ (FDA) quy định. Theo cơ quan n&agrave;y,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;l&agrave; c&aacute;c sản phẩm bổ sung cho chế độ ăn uống h&agrave;ng ng&agrave;y bao gồm một hay nhiều c&aacute;c th&agrave;nh phần như: Protein,Tinh bột, Vitamin, kho&aacute;ng chất, c&aacute;c axit b&eacute;o, axit amin, thảo dược, chất xơ, thực vật hay c&aacute;c sản phẩm c&oacute; sự kết hợp của c&aacute;c th&agrave;nh phần n&agrave;y.</p>

                                        <p><strong>&nbsp; Thực phẩm bổ sung&nbsp;</strong>l&agrave; bổ sung th&ecirc;m dinh dưỡng hằng ng&agrave;y kh&aacute;c với Thực phẩm chức năng cũng l&agrave; bổ sung dinh dưỡng nhưng phục vụ một mục đ&iacute;ch n&agrave;o đ&oacute;.</p>

                                        <p><strong>&nbsp; Thực phẩm bổ sung&nbsp;</strong>vẫn c&oacute; trong tự nhi&ecirc;n, c&oacute; thể c&ograve;n rất &iacute;t hoặc kh&ocirc;ng ho&agrave;n chỉnh , n&ecirc;n c&aacute;c nh&agrave; sản xuất l&agrave;m n&ecirc;n&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;để đ&aacute;p ứng đầy đủ dinh dưỡng hơn cho cơ thể. Như&nbsp;<strong><a href="https://wheyshop.vn/category/whey-protein-html" target="_blank" title="Whey Protein">Whey Protein</a></strong>&nbsp;gi&uacute;p cơ thể hấp thu đạm nhanh hơn.</p>

                                        <p>&nbsp;</p>

                                        <h3><strong>Tại sao bạn n&ecirc;n sử dụng Thực Phẩm Bổ Sung d&agrave;nh cho người tập gym , thể h&igrave;nh .</strong></h3>

                                        <p>Như đ&atilde; n&oacute;i ở tr&ecirc;n,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;vẫn c&oacute; trong tự nhi&ecirc;n nhưng c&oacute; thể rất &iacute;t hoặc kh&ocirc;ng ho&agrave;n chỉnh, n&ecirc;n việc bổ sung dinh dưỡng qua chế độ ăn uống hằng ng&agrave;y l&agrave; kh&ocirc;ng đủ. Đặc biệt l&agrave; trong cuộc sống bộn bề c&ocirc;ng việc l&agrave;m cho mọi người kh&ocirc;ng đủ thời gian chăm s&oacute;c cho bữa ăn hằng ng&agrave;y của m&igrave;nh. Dẫn tới việc thiếu dinh dưỡng, sức khoẻ suy yếu.<br />
                                        Ch&iacute;nh v&igrave; vậy,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;l&agrave; nguồn dinh dưỡng tiện lợi v&agrave; cung cấp, đ&aacute;p ứng đủ dinh dưỡng h&agrave;ng ng&agrave;y cho bạn.</p>

                                        <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589169334/thuc-pham-ban-gay-ung-thu-00-768x512_ukm9yc.jpg" style="height:433px; width:650px" type="image" /></p>

                                        <p>C&agrave;ng nguy hiểm hơn ng&agrave;y nay, vấn nạn an to&agrave;n thực phẩm l&agrave; mối đe dạo nguy hiểm nhất tới sức khoẻ của ch&uacute;ng ta. Thực phẩm kh&ocirc;ng an to&agrave;n: rau củ quả với dư lượng lớn chất bảo quản v&agrave; thuốc trừ s&acirc;u, thịt động vật nhiễm thuốc k&iacute;ch tăng trưởng,.. c&agrave;ng l&agrave;m sức khoẻ của bạn bị đe dọa nghi&ecirc;m trọng. Đ&oacute; cũng ch&iacute;nh l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y n&ecirc;n c&aacute;c bệnh ung thư.<br />
                                        V&igrave; vậy, với sự ph&aacute;t triển kh&ocirc;ng ngừng của khoa học về chất dinh dưỡng đ&atilde; cho ra đời c&aacute;c thực phẩm bổ sung để giải quyết c&aacute;c vấn đề tr&ecirc;n.&nbsp;<strong>Thực phẩm bổ sung&nbsp;</strong>cung cấp dinh dưỡng đầy đủ cho cơ thể bạn, ho&agrave;n to&agrave;n tự nhi&ecirc;n.</p>

                                        <p>Sau nhiều năm ph&aacute;t triển, ho&agrave;n thiện kh&ocirc;ng ngừng,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;trở n&ecirc;n đa dạng v&agrave; phong ph&uacute;. Nhằm cung cấp v&agrave; phục vụ mọi nhu cầu dinh dưỡng h&agrave;ng ng&agrave;y của mọi người. Để thuận tiện trong qu&aacute; tr&igrave;nh sử dụng, n&oacute; c&oacute; thể được chiết xuất dưới dang vi&ecirc;n n&eacute;n hoặc vi&ecirc;n nang mềm, dạng nước hay dạng bột,..</p>

                                        <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589169375/wwhey-protein-wwheyshop-768x352_kwajli.jpg" style="height:298px; width:650px" type="image" /></p>

                                        <h3><strong>Những điều kh&ocirc;ng thể bỏ qua về sử dụng Thực Phẩm Bổ Sung d&agrave;nh cho người tập gym , thể h&igrave;nh</strong></h3>

                                        <p><strong>Thực phẩm bổ sung kh&ocirc;ng phải l&agrave; thuốc!</strong></p>

                                        <p>Kh&ocirc;ng n&ecirc;n nhầm lẫn giữa&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;với thực phẩm chức năng, c&aacute;c loại thuốc hay chất k&iacute;ch th&iacute;ch kh&aacute;c. V&igrave;&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;ho&agrave;n to&agrave;n tự nhi&ecirc;n, bổ sung dinh dưỡng cho cơ thể gi&uacute;p bạn c&oacute; một cơ thể khỏe mạnh, tinh thần thoải m&aacute;i ,&nbsp;<strong>kh&ocirc;ng phục vụ bất kỳ mục đ&iacute;ch ri&ecirc;ng n&agrave;o hoặc bệnh n&agrave;o</strong>. Vậy n&ecirc;n mọi người kh&ocirc;ng n&ecirc;n lạm dụng thực phẩm bổ sung qu&aacute; mức cần thiết nhu cầu của cơ thể.&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;kh&ocirc;ng thể thay thế ho&agrave;n to&agrave;n bữa ăn h&agrave;ng ng&agrave;y của c&aacute;c bạn.&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;chỉ bổ sung th&ecirc;m c&aacute;c dưỡng chất c&ograve;n thiếu trong c&aacute;c bữa ăn, sử dụng như bữa ăn phụ.</p>

                                        <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589169386/thuc-pham-tot-cho-mat-2-768x384_lzw3hk.jpg" style="height:325px; width:650px" type="image" /></p>

                                        <h2><strong>Top 5 thực phẩm bổ sung tăng cơ giảm mỡ , tăng c&acirc;n mass gainer d&agrave;nh cho người tập gym , thể h&igrave;nh .</strong></h2>

                                        <p><strong>Thực phẩm bổ sung&nbsp;</strong>c&oacute; thể bổ sung đầy đủ c&aacute;c dưỡng chất cần thiết , t&ugrave;y từng mục ti&ecirc;u v&agrave; nhu cầu , mọi người chọn sử dụng c&aacute;c sản phẩm bổ sung kh&aacute;c nhau :</p>

                                        <p><strong>Thực phẩm bổ sung Vitamin Tổng hợp&nbsp;</strong>: bổ sung h&agrave;m lượng lợn c&aacute;c vitamin, kho&aacute;ng chất hỗ trợ tăng cường trao đổi chất, hệ miễn dịch, ti&ecirc;u h&oacute;a như&nbsp;<strong><a href="https://wheyshop.vn/san-pham/nutrabio-multisport" target="_blank">NutraBio&reg; Multi Sport</a></strong>&nbsp;,<strong><a href="https://wheyshop.vn/san-pham/opti-men-78" target="_blank">Optimen</a></strong>&nbsp;,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/platinum-multi-vitamin-74" target="_blank">Multi Vitamin</a></strong>,</p>

                                        <p><strong>Thực phẩm bổ sung&nbsp;<a href="#" target="_blank">Whey Protein</a>&nbsp;</strong>: bổ sung nguồn đạm hấp thu nhanh, hỗ trợ phục hồi , ph&aacute;t triển cơ bắp như&nbsp;<strong><a href="https://wheyshop.vn/san-pham/nutrabio-100-whey-protein-isolate-5lbs" target="_blank">NutraBio&reg; Whey Protein Isolate,</a></strong>&nbsp;Iso Surge, Iso 93,&hellip;</p>

                                        <p><strong>Thực phẩm bổ sung giảm c&acirc;n giảm mỡ Fatburn&nbsp;</strong>: bổ sung c&aacute;c chất gi&uacute;p tăng cường trao đổi chất cơ thể, chuyển h&oacute;a v&agrave; giảm lượng mỡ thừa , giảm c&acirc;n hiệu quả như&nbsp;<strong><a href="https://wheyshop.vn/san-pham/nutrabio-thermofuel" target="_blank">NutraBio&reg; ThermoFuel V.9</a></strong>&nbsp;,&nbsp;<a href="https://wheyshop.vn/san-pham/lipo-6-black-ultra-concentrate-133" target="_blank"><strong>Lipo 6</strong></a>,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/hydroxycut-hardcore-next-gen-83" target="_blank">Hydroxycut</a></strong>&nbsp;.</p>

                                        <p><strong>Thực phẩm bổ sung gi&agrave;u dinh dưỡng&nbsp;<a href="#">tăng c&acirc;n tăng cơ Mass Gainer</a>&nbsp;</strong>: bổ sung gi&agrave;u dinh dưỡng như Protein, đạm, chất b&eacute;o vừa đủ, vitamin, kho&aacute;ng chất gi&uacute;p tăng c&acirc;n nhanh, hiệu quả, kết hợp tập luyện tăng cơ nạc như&nbsp;<strong><a href="https://wheyshop.vn/thuong-hieu/elite-labs" target="_blank">Mass Muscle Gainer</a></strong>,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/mutant-mass-15lbs" target="_blank">Mutant Mass</a></strong>,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/serious-mass-12lbs-5-4kg-54" target="_blank">Serious Mass</a></strong>, &hellip;</p>

                                        <p>Hy vọng b&agrave;i viết tr&ecirc;n đ&acirc;y, đ&atilde; cung cấp cho bạn nhiều kiến thức về&nbsp;<strong>Thực phẩm bổ sung</strong>. Từ giờ chắc chắn c&aacute;c bạn đ&atilde; c&oacute; c&aacute;i nh&igrave;n kh&aacute;i qu&aacute;t về n&oacute;. Biết c&aacute;ch sử dụng n&oacute; l&agrave;m sao cho hiệu quả v&agrave; tốt nhất rồi đ&uacute;ng kh&ocirc;ng n&agrave;o. Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng, c&oacute; sức khoẻ dồi d&agrave;o, cuộc sống l&agrave;nh mạnh !!!</p>
                                        ',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1586698467/tpbs_iucj8e.jpg',
                'hot' => '1',
                'category_news_id' => '1',
                'views' => '20',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '2',
                'title' => 'Kinh nghiệm giảm cân bằng yến mạch và cách chọn yến mạch giảm cân hiệu quả',
                'summary' => 'Yến mạch được coi là nguồn tinh bột tốt, hấp thu chậm và đem lại nhiều lợi ích cho sức khỏe, nhất là về khả năng giảm cân. [...]',
                'content' => '<h2>Kinh nghiệm giảm c&acirc;n bằng yến mạch . C&aacute;ch chọn yến mạch giảm c&acirc;n</h2>

                                <p>Yến mạch được coi l&agrave; nguồn tinh bột tốt, hấp thu chậm v&agrave; đem lại nhiều lợi &iacute;ch cho sức khỏe, nhất l&agrave; về khả năng giảm c&acirc;n. Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng c&oacute; kinh nghiệm giảm c&acirc;n bằng yến mạch để c&oacute; thể giảm c&acirc;n hiệu quả.&nbsp;</p>

                                <p>Ngay sau đ&acirc;y, h&atilde;y để Gymer Store&nbsp;chia sẻ đến bạn&nbsp;kinh nghiệm giảm c&acirc;n bằng yến mạch. C&aacute;ch chọn yến mạch giảm c&acirc;n tốt nhất ngay trong b&agrave;i viết sau để bạn c&oacute; thể giảm c&acirc;n nhanh ch&oacute;ng hiệu quả nh&eacute;.&nbsp;</p>

                                <h3><strong>Kinh nghiệm giảm c&acirc;n bằng yến mạch</strong></h3>

                                <p>Đối với kinh nghiệm giảm c&acirc;n bằng yến mạch. Hầu hết mọi người đều c&oacute; một thắc mắc chung đ&oacute; l&agrave; ăn yến mạch như thế n&agrave;o hoặc chế biến yến mạch ra sao để giảm c&acirc;n hiệu quả m&agrave; vẫn đầy đủ dinh dưỡng. Dưới đ&acirc;y sẽ l&agrave; những m&oacute;n ăn được l&agrave;m từ yến mạch với c&ocirc;ng thức đơn giản để gi&uacute;p bạn giảm c&acirc;n nhanh ch&oacute;ng&nbsp;</p>

                                <p><strong><u><em>Ch&aacute;o yến mạch giảm c&acirc;n&nbsp;</em></u></strong></p>

                                <p>Ch&aacute;o yến mạch l&agrave; m&oacute;n ăn dễ d&agrave;ng chế biến nhất, c&oacute; thể chế biến từ c&aacute;c loại yến mạch kh&aacute;c nhau. Ch&aacute;o yến mạch kh&ocirc;ng chỉ sử dụng để giảm c&acirc;n m&agrave; c&ograve;n rất tốt để bồi bổ khi ốm bởi nguồn dinh dưỡng gi&agrave;u c&oacute; của m&igrave;nh.&nbsp;</p>

                                <p><u><em><strong>C&ocirc;ng thức nấu ch&aacute;o yến mạch như sau:&nbsp;</strong></em></u></p>

                                <p>- Lấy một lượng yến mạch vừa đủ, cho v&agrave;o nồi c&ugrave;ng với nước sau đ&oacute; đun s&ocirc;i khoảng 5 ph&uacute;t v&agrave; tắt bếp.&nbsp;</p>

                                <p>- Sử dụng ngay lập tức hoặc trữ đ&ocirc;ng trong tủ lạnh d&ugrave;ng dần.&nbsp;</p>

                                <p>Lưu &yacute; khi nấu ch&aacute;o yến mạch đ&oacute; l&agrave; bạn n&ecirc;n sử dụng c&aacute;c loại yến mạch như yến mạch c&aacute;n dẹt hoặc yến mạch c&aacute;n vỡ để nấu sẽ nhanh hơn. Sử dụng yến mạch nguy&ecirc;n hạt bạn sẽ phải đun rất l&acirc;u tương đương với việc nấu cơm.&nbsp;</p>

                                <p>Ngo&agrave;i ra, nếu bạn muốn giảm c&acirc;n theo hướng l&acirc;u d&agrave;i th&igrave; tốt nhất kh&ocirc;ng n&ecirc;n cho bất kỳ gia vị n&agrave;o v&agrave;o ch&aacute;o trong qu&aacute; tr&igrave;nh nấu, nhất l&agrave; đường v&agrave; dầu. Ban đầu c&oacute; thể bạn chưa quen với vị của yến mạch th&igrave; sẽ hơi kh&oacute; ăn một ch&uacute;t nhưng rồi ăn quen sẽ thấy rất ngon.&nbsp;</p>

                                <p>Để giảm c&acirc;n hiệu quả th&igrave; bạn n&ecirc;n cắt giảm bớt h&agrave;m lượng tinh bột trong ng&agrave;y, bởi yến mạch đ&atilde; c&oacute; một lượng tinh bột sẵn trong đ&oacute; rồi. Bạn cũng n&ecirc;n bổ sung dinh dưỡng Vitamin từ c&aacute;c loại hoa quả để tr&aacute;nh mệt mỏi nh&eacute;.&nbsp;</p>

                                <p><u><em><strong>Giảm c&acirc;n với yến mạch v&agrave; sữa</strong></em></u>.&nbsp;</p>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589163231/1589163229.jpg" style="height:400px; width:600px" type="image" /></p>

                                <p>Yến mạch l&agrave; nguồn tinh bột cực gi&agrave;u chất xơ, do đ&oacute; khi sử dụng sẽ gi&uacute;p ổn định đường huyết v&agrave; hạn chế c&aacute;c bệnh tim mạch hiệu quả. Việc kết hợp sử dụng yến mạch với sữa tươi kh&ocirc;ng những gi&uacute;p cung cấp th&ecirc;m dinh dưỡng cho cơ thể m&agrave; c&ograve;n tăng th&ecirc;m canxi cho xương chắc khỏe nữa.&nbsp;</p>

                                <p>C&aacute;ch l&agrave;m v&ocirc; c&ugrave;ng đơn giản, bạn chỉ cần sử dụng yến mạch c&aacute;n mỏng hoặc bột yến mạch, pha v&agrave;o nước s&ocirc;i v&agrave; quấy đều, cuối c&ugrave;ng cho th&ecirc;m sữa tươi kh&ocirc;ng đường hoặc sữa t&aacute;ch b&eacute;o v&agrave;o đun nhỏ lửa tầm 5 ph&uacute;t, kết hợp th&ecirc;m tr&aacute;i c&acirc;y để ăn cho đỡ ng&aacute;n nh&eacute;.&nbsp;</p>

                                <p>Thực đơn giảm c&acirc;n bằng yến mạch v&agrave; sữa:&nbsp;</p>

                                <p>- Bữa s&aacute;ng: Một t&ocirc; yến mạch sữa tươi, 1 quả trứng&nbsp;</p>

                                <p>- Bữa trưa: 1 t&ocirc; yến mạch sữa tươi, rau củ luộc&nbsp;</p>

                                <p>- Bữa chiều: Tr&aacute;i c&acirc;y, 1 ly sữa t&aacute;ch b&eacute;o</p>

                                <p>- Bữa tối: 1 t&ocirc; yến mạch sữa tươi, 1 hũ sữa chua hoặc nước hoa quả.</p>

                                <p>Nếu để tr&aacute;nh ng&aacute;n, bạn cũng c&oacute; thể kết hợp thực đơn n&agrave;y với sử dụng khoai lang k&egrave;m v&agrave;o để tăng hiệu quả cải thiện v&oacute;c d&aacute;ng tốt hơn nh&eacute;.&nbsp;</p>

                                <p><u><em><strong>Yến mạch với c&aacute;c loại hạt v&agrave; tr&aacute;i c&acirc;y kh&ocirc;&nbsp;</strong></em></u></p>

                                <p>C&aacute;c loại hạt cũng như tr&aacute;i c&acirc;y kh&ocirc; l&agrave; những thực phẩm giảm c&acirc;n hiệu quả trong qu&aacute; tr&igrave;nh ăn ki&ecirc;ng. Những loại hạt v&agrave; tr&aacute;i c&acirc;y kh&ocirc; thường chứa nhiều Vitamin v&agrave; kho&aacute;ng chất cần thiết cũng như chất b&eacute;o tốt cho cơ thể v&agrave; kh&ocirc;ng qu&aacute; nhiều calo. Tuy nhi&ecirc;n, đừng lựa chọn những loại tr&aacute;i c&acirc;y nhiều đường nh&eacute;.&nbsp;</p>

                                <p><em><strong>C&ocirc;ng thức chế biến như sau:&nbsp;</strong></em></p>

                                <p>- Chuẩn bị c&aacute;c loại tr&aacute;i c&acirc;y kh&ocirc;&nbsp; từ c&aacute;c loại quả mọng như việt quất, anh đ&agrave;o, v&agrave; c&aacute;c loại hạt như hạt chia, hạt hạnh nh&acirc;n, hạt điều v.v&hellip;</p>

                                <p>- 1 muỗng mật ong</p>

                                <p>- 1 ch&eacute;n yến mạch&nbsp;</p>

                                <p>Trộn đều tất cả l&agrave; c&oacute; thể thưởng thức.</p>

                                <p>Lưu &yacute; l&agrave; bạn n&ecirc;n chọn loại yến mạch ph&ugrave; hợp như yến mạch c&aacute;n mỏng hoặc bột yến mạch th&igrave; sẽ dễ sử dụng hơn so với c&aacute;c loại kh&aacute;c nh&eacute;. Ngo&agrave;i ra, bạn c&oacute; thể ăn ngay hoặc pha c&ugrave;ng th&ecirc;m với sữa chua v&agrave; để qua đ&ecirc;m sẽ c&oacute; vị ngon hơn nh&eacute;.&nbsp;</p>

                                <p><strong>Yến mạch với trứng g&agrave;</strong></p>

                                <p>Hầu hết đối với c&aacute;c bữa s&aacute;ng, bạn n&ecirc;n c&oacute; một bữa ăn đầy đủ lượng tinh bột, đạm v&agrave; chất b&eacute;o để cung cấp năng lượng cho cả một ng&agrave;y d&agrave;i năng động. Trứng ch&iacute;nh l&agrave; nguồn Protein tốt m&agrave; bạn c&oacute; thể dễ d&agrave;ng chế biến v&agrave; sử dụng kết hợp với yến mạch.&nbsp;</p>

                                <p>Chuẩn bị nguy&ecirc;n liệu:&nbsp;</p>

                                <p>- 1 quả trứng g&agrave;&nbsp;</p>

                                <p>- Nửa tr&aacute;i bơ nhỏ&nbsp;</p>

                                <p>- Rau xanh v&agrave; ti&ecirc;u</p>

                                <p>- 1 ch&eacute;n yến mạch</p>

                                <p>C&aacute;ch l&agrave;m v&ocirc; c&ugrave;ng đơn giản, trứng bạn h&atilde;y ốp l&ecirc;n cho dễ ăn, yến mạch bạn pha với nước s&ocirc;i v&agrave; cho bơ, rau v&agrave; trứng l&ecirc;n ph&iacute;a tr&ecirc;n, th&ecirc;m &iacute;t muối v&agrave; hạt ti&ecirc;u để tăng hương vị.&nbsp;</p>

                                <p>Những lưu &yacute; khi giảm c&acirc;n bằng yến mạch để kh&ocirc;ng g&acirc;y ng&aacute;n v&agrave; sử dụng l&acirc;u d&agrave;i.&nbsp;</p>

                                <p>Ăn yến mạch khi n&oacute;ng sẽ dễ hơn ăn nguội, do đ&oacute;, nếu bạn sử dụng ch&aacute;o yến mạch th&igrave; n&ecirc;n h&acirc;m lại trước khi sử dụng sẽ tr&aacute;nh bị ng&aacute;n do vị của yến mạch hơn. C&ograve;n nếu ăn lạnh th&igrave; bạn c&oacute; thể ăn yến mạch pha k&egrave;m sữa v&agrave; tr&aacute;i c&acirc;y.&nbsp;</p>

                                <p>Kh&ocirc;ng n&ecirc;n nấu ch&aacute;o yến mạch qu&aacute; nhừ, khi để nguội hoặc ăn lại sẽ g&acirc;y cảm gi&aacute;c kh&oacute; chịu, bạn n&ecirc;n nấu vừa ch&iacute;n tới th&igrave; yến mạch sẽ dẻo v&agrave; thơm hơn. Ngo&agrave;i ra bạn c&oacute; thể kết hợp với rau củ hoặc tr&aacute;i c&acirc;y gi&agrave;u xơ để c&oacute; th&ecirc;m dinh dưỡng v&agrave; giảm c&acirc;n hiệu quả.&nbsp;</p>

                                <p>Để c&oacute; thể giảm c&acirc;n hiệu quả, ngo&agrave;i việc sử dụng yến mạch giảm c&acirc;n th&igrave; bạn cũng n&ecirc;n tập luyện thể dục thể thao thường xuy&ecirc;n &iacute;t nhất 30 ph&uacute;t mỗi ng&agrave;y để cơ thể khỏe mạnh v&agrave; tăng hiệu quả giảm c&acirc;n tốt hơn.&nbsp;</p>

                                <p>N&ecirc;n hạn chế sử dụng c&aacute;c loại yến mạch chế biến sẵn chứa nhiều đường, th&ocirc;ng thường mỗi khẩu phần yến mạch ăn liền cung cấp khoảng 159 calo v&agrave; 12g đường, tuy nhi&ecirc;n với ⅓ ch&eacute;n yến mạch nguy&ecirc;n chất th&igrave; chỉ c&oacute; gần 100 calo v&agrave; chưa tới 1g đường. Điều n&agrave;y để đảm bảo cho bạn c&oacute; một sức khỏe hệ tim mạch ổn định v&agrave; hạn chế nạp đường qu&aacute; nhiều trong ng&agrave;y.&nbsp;</p>

                                <p>Kinh nghiệm giảm c&acirc;n bằng yến mạch v&ocirc; c&ugrave;ng đơn giản, bạn c&oacute; thể bắt đầu sử dụng ngay những thực đơn tr&ecirc;n để giảm c&acirc;n nhanh ch&oacute;ng hoặc thay thế dần dần để c&oacute; thể giảm c&acirc;n một c&aacute;ch từ tốn v&agrave; ổn định hơn.&nbsp;</p>

                                <h3><u><em><strong>C&aacute;ch chọn yến mạch giảm c&acirc;n</strong></em></u></h3>

                                <p>Hiện nay do nhu cầu sử dụng yến mạch ng&agrave;y một tăng cao, do đ&oacute; c&aacute;c loại yến mạch cũng được ra đời theo nhiều phương thức kh&aacute;c nhau để người d&ugrave;ng c&oacute; thể sử dụng t&ugrave;y theo mục đ&iacute;ch của m&igrave;nh.</p>

                                <p>Để c&oacute; được c&aacute;ch chọn yến mạch giảm c&acirc;n hiệu quả, bạn cần phải ph&acirc;n biệt được c&aacute;c loại yến mạch với nhau. Th&ocirc;ng thường yến mạch sẽ được chia l&agrave;m 3 loại cơ bản đ&oacute; l&agrave;: Yến mạch cắt hạt tấm ( Steel Cut), yến mạch c&aacute;n tấm ( Old Fashioned) v&agrave; yến mạch ăn liền (Instant) để ph&ugrave; hợp với mục đ&iacute;ch sử dụng v&agrave; c&aacute;ch chế biến.&nbsp;</p>

                                <p><em><strong>Yến mạch cắt hạt ấm ( Steel Cut</strong></em>)&nbsp;</p>

                                <p>Đ&acirc;y l&agrave; loại yến mạch gần nhất với dạng ban đầu của yến mạch. Tuy nhi&ecirc;n cũng ch&iacute;nh v&igrave; thế m&agrave; thời gian chế biến l&acirc;u hơn, thường l&agrave; khoảng 30 ph&uacute;t, c&oacute; m&ugrave;i vị kh&aacute; thơm v&agrave; dẻo.&nbsp;</p>

                                <p>Loại yến mạch n&agrave;y rất ph&ugrave; hợp cho việc ăn s&aacute;ng, bạn c&oacute; thể nấu ch&aacute;o yến mạch với loại yến mạch n&agrave;y sẽ thấy thơm ngon hơn. C&aacute;ch tốt nhất ch&iacute;nh l&agrave; nấu sẵn 1 phần yến mạch với 3 phần nước v&agrave;o buổi tối, sau đ&oacute; đậy vung v&agrave; để qua đ&ecirc;m, h&ocirc;m sau bạn chỉ cần ăn k&egrave;m với hoa quả hay c&aacute;c loại hạt l&agrave; đ&atilde; c&oacute; một bữa s&aacute;ng ho&agrave;n chỉnh&nbsp;</p>

                                <p><em><strong>Yến mạch c&aacute;n tấm ( Old Fashioned)&nbsp;</strong></em></p>

                                <p>Đ&acirc;y l&agrave; loại yến mạch nguy&ecirc;n hạt đ&atilde; được hấp mềm v&agrave; c&aacute;n đến độ mỏng như &yacute;. Loại yến mạch n&agrave;y c&oacute; thời gian nấu nhanh hơn, chỉ khoảng 2 &ndash; 5 ph&uacute;t. Thường sử dụng cho một bữa ăn nhanh bởi c&oacute; thể chế biến m&agrave; kh&ocirc;ng bị v&oacute;n hay n&aacute;t m&agrave; vẫn giữ được độ dẻo thơm như &yacute;.&nbsp;</p>

                                <p><em><strong>Yến mạch ăn liền ( Instant/ Quick)&nbsp;</strong></em></p>

                                <p>Loại yến mạch n&agrave;y l&agrave; loại đ&atilde; được chế biến nhiều nhất. Ch&uacute;ng đ&atilde; được hấp ch&iacute;n v&agrave; sau đ&oacute; c&aacute;n dẹp lại rất mỏng. Những loại yến mạch n&agrave;y thường chế biến rất nhanh v&agrave; c&oacute; thể ăn ngay chỉ trong v&ograve;ng 1 ph&uacute;t. Đ&acirc;y l&agrave; loại yến mạch d&agrave;nh cho người &iacute;t c&oacute; thời gian nấu ăn v&agrave; th&iacute;ch ăn kiểu s&aacute;nh mịn như bột.&nbsp;</p>

                                <p>Ngo&agrave;i những loại tr&ecirc;n, c&ograve;n c&oacute; th&ecirc;m một loại yến mạch ăn liền đ&oacute; l&agrave;&nbsp;<a href="https://wheyshop.vn/san-pham/yen-mach-ngu-coc-an-lien-granola-2lbs" target="_blank">yến mạch Granola</a>. Đ&acirc;y l&agrave; loại yến mạch đ&atilde; được chế biến sẵn v&agrave; c&oacute; th&ecirc;m th&agrave;nh phần hoa quả kh&ocirc; hay c&aacute;c loại hạt trong đ&oacute;. Việc của bạn đơn giản chỉ cần pha c&ugrave;ng với sữa tươi hoặc sữa chua l&agrave; c&oacute; thể ăn ngay m&agrave; kh&ocirc;ng cần chế biến mất thời gian.&nbsp;</p>

                                <p>Vậy chọn loại yến mạch n&agrave;o l&agrave; ph&ugrave; hợp với việc giảm c&acirc;n nhất?&nbsp;</p>

                                <p>Hiện nay tr&ecirc;n thị trường c&oacute; rất nhiều loại yến mạch, nhưng phổ biến trong đ&oacute; l&agrave; yến mạch c&aacute;n tấm, yến mạch ăn liền v&agrave; Granola được ưa chuộng nhiều nhất nhờ khả năng chế biến nhanh v&agrave; gi&agrave;u dinh dưỡng.&nbsp;</p>

                                <p>Yến mạch c&aacute;n tấm sẽ gần như thuộc dạng nguy&ecirc;n thủy nhất, do đ&oacute; chứa h&agrave;m lượng chất xơ rất cao v&agrave; nguồn tinh bột hấp thu chậm hiệu quả. Loại yến mạch n&agrave;y cũng l&agrave; loại kh&ocirc;ng bị th&ecirc;m đường khi sản xuất. Loại yến mạch c&aacute;n tấm thường được ưa chuộng nhất hiện nay đ&oacute; l&agrave; Quaker Old Fashioned rất đơn giản v&agrave; dễ d&agrave;ng chế biến.&nbsp;</p>

                                <p>C&ograve;n đối với yến mạch ăn liền, bạn c&oacute; thể lựa chọn c&aacute;c loại như Quaker Quick 1 Minute Oats hoặc Quaker Granola. Cả hai sản phẩm n&agrave;y đều l&agrave; yến mạch ăn liền, tuy nhi&ecirc;n loại đầu ti&ecirc;n bạn vẫn cần phải chế biến v&agrave; mix th&ecirc;m c&aacute;c loại thực phẩm kh&aacute;c, c&ograve;n đối với Granola th&igrave; bạn c&oacute; thể ăn liền m&agrave; kh&ocirc;ng cần chế biến th&ecirc;m. Hai loại n&agrave;y rất ph&ugrave; hợp với người bận rộn kh&ocirc;ng c&oacute; thời gian chế biến.&nbsp;</p>

                                <p>Bạn cũng n&ecirc;n lưu &yacute; đ&oacute; l&agrave; yến mạch Granola thường c&oacute; chứa th&ecirc;m đường để tăng độ ngọt. Tuy nhi&ecirc;n với Quaker Granola th&igrave; bạn c&oacute; thể y&ecirc;n t&acirc;m về phần n&agrave;y v&igrave; sản phẩm c&oacute; chứa cực &iacute;t đường v&agrave; độ ngọt chủ yếu đến từ th&agrave;nh phần mật ong c&oacute; trong đ&oacute;.</p>

                                <p>Theo kinh nghiệm giảm c&acirc;n bằng yến mạch của m&igrave;nh th&igrave; nếu muốn giảm c&acirc;n nhanh, c&aacute;c bạn c&oacute; thể lựa chọn d&ograve;ng sản phẩm c&aacute;n tấm v&agrave; loại ăn liền dạng Quick 1 Minute Oats v&igrave; hai loại n&agrave;y gần như tương đương nhau về dinh dưỡng. C&ograve;n nếu bạn qu&aacute; bận rộn th&igrave; n&ecirc;n chọn Granola cho nhanh nh&eacute;.&nbsp;</p>
                                ',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/c_fit/1589165761.png',
                'hot' => '1',
                'category_news_id' => '1',
                'views' => '11',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '3',
                'title' => 'Sữa tăng cơ có hại không ? Tập gym có nên uống sữa tăng cơ không?',
                'summary' => 'Đối với những người tập thể hình, tập tạ thì tăng cơ bắp luôn luôn là mục tiêu hàng đầu của họ. Đó là lý do mà sữa tăng cơ [...]',
                'content' => '<h3><strong>Sữa tăng cơ c&oacute; hại kh&ocirc;ng ?</strong></h3>

                                    <p>Đầu ti&ecirc;n, bạn cần phải hiểu một điều cơ bản, đ&oacute; ch&iacute;nh l&agrave;&nbsp;<a href="https://wheyshop.vn/category/whey-protein-html" target="_blank">sữa tăng cơ</a>&nbsp;hay c&ograve;n được gọi l&agrave; thực phẩm bổ sung. Thực phẩm bổ sung kh&ocirc;ng phải l&agrave; thuốc, kh&ocirc;ng c&oacute; t&aacute;c dụng thay thế thuốc v&agrave; cũng kh&ocirc;ng thể thay thế thức ăn tự nhi&ecirc;n h&agrave;ng n&agrave;y.&nbsp;</p>

                                    <p>Việc sử dụng thực phẩm bổ sung l&agrave; v&ocirc; hại, thậm ch&iacute; c&oacute; thể đem lại nhiều lợi &iacute;ch cho sức khỏe nếu bạn sử dụng đ&uacute;ng c&aacute;ch v&agrave; đ&uacute;ng liều lượng. Một số người do kh&ocirc;ng biết ph&acirc;n biệt n&ecirc;n thường thấy những thực phẩm bổ sung dạng bột hay dạng vi&ecirc;n sẽ coi l&agrave; thuốc.&nbsp;</p>

                                    <p><strong>Sữa tăng cơ l&agrave; g&igrave; ?</strong></p>

                                    <p>Sữa tăng cơ l&agrave; một loại thực phẩm bổ sung c&oacute; dạng bột, c&oacute; chứa h&agrave;m lượng Protein tinh khiết c&ugrave;ng rất nhiều Amino Acid thiết yếu cho cơ thể. Sữa tăng cơ hay c&ograve;n được gọi l&agrave;&nbsp;<a href="https://wheyshop.vn/category/whey-protein-html" target="_blank" title="Whey Protein">Whey Protein</a>, c&oacute; t&aacute;c dụng hỗ trợ trong qu&aacute; tr&igrave;nh ph&aacute;t triển cơ bắp.&nbsp;</p>

                                    <p><strong>Những lưu &yacute; về sữa tăng cơ&nbsp;</strong></p>

                                    <p>Sữa tăng cơ c&oacute; th&agrave;nh phần chủ yếu l&agrave; Protein, những loại Protein n&agrave;y được điều chế hầu hết từ sữa b&ograve;, một số được điều chế từ l&ograve;ng trắng trứng v&agrave; hiện nay c&oacute; cả từ thực vật n&ecirc;n bạn c&oacute; thể y&ecirc;n t&acirc;m về nguồn gốc.&nbsp;</p>

                                    <p>Sử dụng sữa tăng cơ c&oacute; hại kh&ocirc;ng? C&acirc;u trả lời l&agrave; ho&agrave;n to&agrave;n v&ocirc; hại. Tuy nhi&ecirc;n, điều n&agrave;y chỉ thực sự đ&uacute;ng khi bạn sử dụng đ&uacute;ng c&aacute;ch v&agrave; đ&uacute;ng liều lượng. Bạn cần biết r&otilde; 1 ng&agrave;y bạn n&ecirc;n nạp khoảng bao nhi&ecirc;u gam Protein để c&oacute; thể biết ch&iacute;nh x&aacute;c liều lượng m&igrave;nh cần sử dụng.</p>

                                    <p>L&yacute; do l&agrave; bởi nếu bạn đ&atilde; ăn uống với một chế độ gi&agrave;u Protein v&agrave; sử dụng th&ecirc;m sữa tăng cơ Whey Protein sẽ g&acirc;y ra t&igrave;nh trạng dư thừa Protein nạp v&agrave;o cơ thể. Điều n&agrave;y khiến thận của bạn phải l&agrave;m việc nhiều hơn thậm ch&iacute; kh&ocirc;ng thể xử l&yacute; được hết. Hơn nữa c&ograve;n khiến bạn nạp th&ecirc;m một lượng calo kh&ocirc;ng đ&aacute;ng c&oacute; v&agrave; do đ&oacute; l&agrave;m bạn tăng c&acirc;n v&agrave; g&acirc;y ảnh hưởng xấu tới sức khỏe.&nbsp;</p>

                                    <p>Một điểm cần lưu &yacute; khi sử dụng sữa tăng cơ đ&oacute; l&agrave; h&agrave;m lượng Lactose c&oacute; trong sản phẩm. Nếu bạn bị bụng yếu hay dị ứng với th&agrave;nh phần n&agrave;y th&igrave; bạn sẽ dễ bị đau bụng v&agrave; ti&ecirc;u chảy. Tuy nhi&ecirc;n bạn c&oacute; thể y&ecirc;n t&acirc;m hơn bởi th&agrave;nh phần n&agrave;y chỉ tồn tại ở trong những d&ograve;ng Whey Concentrate. Hiện nay đ&atilde; c&oacute; những d&ograve;ng Whey cao cấp hơn như Whey Isolate hay Hydrolyzed đ&atilde; loại bỏ ho&agrave;n to&agrave;n th&agrave;nh phần n&agrave;y.&nbsp;</p>

                                    <h3><strong>Tập gym c&oacute; n&ecirc;n uống sữa tăng cơ kh&ocirc;ng ?</strong></h3>

                                    <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589170378/sua-tang-co-co-hai-khong-wheyshop-vn-2-1024x886_gpwwid.jpg" style="height:480px; width:555px" type="image" /></strong></p>

                                    <p>C&acirc;u trả lời chắc chắn l&agrave; c&oacute;, nhất l&agrave; nếu bạn l&agrave; người thường xuy&ecirc;n tập luyện thể h&igrave;nh, thể thao. Đầu ti&ecirc;n bạn cần xem x&eacute;t chế độ dinh dưỡng của m&igrave;nh. H&atilde;y nhớ rằng, để ph&aacute;t triển cơ bắp hiệu quả bạn cần nhiều Protein, kh&ocirc;ng n&ecirc;n để thiếu v&agrave; cũng kh&ocirc;ng n&ecirc;n dư thừa qu&aacute; mức.&nbsp;</p>

                                    <p>Nếu chế độ dinh dưỡng của bạn trong 1 ng&agrave;y đ&atilde; đủ h&agrave;m lượng Protein cần thiết th&igrave; bạn ho&agrave;n to&agrave;n kh&ocirc;ng cần sử dụng th&ecirc;m. Thực tế cho thấy với khẩu phần ăn hiện nay của ch&uacute;ng ta th&igrave; hầu hết chẳng thể đủ trong ng&agrave;y chứ đừng n&oacute;i thừa.&nbsp;</p>

                                    <p>Bởi chế độ ăn của người Ch&acirc;u &Aacute; thường gi&agrave;u tinh bột nhiều hơn so với c&aacute;c th&agrave;nh phần kh&aacute;c, hơn nữa khả năng hấp thu Protein cũng kh&ocirc;ng nhiều, bạn nạp v&agrave;o 100% th&igrave; chỉ hấp thu được khoảng 30 &ndash; 40%, do đ&oacute; bạn c&oacute; thể ăn nhiều nhưng hấp thu lại kh&ocirc;ng được bao nhi&ecirc;u.&nbsp;</p>

                                    <p>V&agrave;o l&uacute;c n&agrave;y, sử dụng sữa tăng cơ Whey Protein sẽ gi&uacute;p bạn bổ sung một h&agrave;m lượng lớn Protein, với th&agrave;nh phần tinh khiết nhất gi&uacute;p bạn hấp thu tốt hơn, nhanh hơn, khi nạp v&agrave;o cơ thể sẽ hấp thu được gần như to&agrave;n bộ do đ&oacute; chất lượng lu&ocirc;n cao cấp hơn so với thức ăn tự nhi&ecirc;n.&nbsp;</p>

                                    <p><strong>Ưu v&agrave; nhược điểm của sữa tăng cơ&nbsp;</strong></p>

                                    <p>Hầu hết những loại thực phẩm bổ sung bao gồm cả sữa tăng cơ đều l&agrave; những sản phẩm đ&atilde; được th&ocirc;ng qua chắt lọc để c&oacute; được những th&agrave;nh phần tinh khiết nhất. Đ&acirc;y thường l&agrave; những chất cần thiết hoặc cơ thể con người kh&ocirc;ng thể tự tổng hợp được.&nbsp;</p>

                                    <p>Để cung cấp một lượng Protein cho cơ thể, về thức ăn tự nhi&ecirc;n bạn sẽ phải ăn rất nhiều thịt. Tuy nhi&ecirc;n, do cơ thể kh&ocirc;ng thể hấp thu được hết do đ&oacute; sẽ đ&agrave;o thải phần lớn ra khỏi cơ thể, rất l&atilde;ng ph&iacute;.&nbsp;</p>

                                    <p>Để c&oacute; thể cung cấp cho cơ thể 20 &ndash; 30g Protein, bạn cần phải ăn khoảng 100g thịt b&ograve;. Điều n&agrave;y đồng nghĩa với việc bạn đ&atilde; nạp th&ecirc;m v&agrave;o cơ thể rất nhiều chất b&eacute;o v&agrave; tạp chất kh&aacute;c nhau. Trong khi đ&oacute;, chỉ với 1 muỗng Whey Protein cung cấp ngay cho bạn từ 25 &ndash; 30g Protein tinh khiết nhất, &iacute;t tạp chất v&agrave; hấp thu gần như ho&agrave;n to&agrave;n.&nbsp;</p>

                                    <p>Bạn c&oacute; thể thấy chỉ với gi&aacute; bằng hoặc thấp hơn 100g thịt b&ograve;, bạn đ&atilde; c&oacute; ngay 25 &ndash; 30g Protein. Hơn nữa, H&agrave;m lượng Protein trong thịt b&ograve; l&agrave; chưa qua xử l&yacute;, do đ&oacute; cơ thể kh&ocirc;ng thể hấp thu hết v&agrave; tự đ&agrave;o thải ra ngo&agrave;i n&ecirc;n kh&ocirc;ng thể cung cấp đủ h&agrave;m lượng như &yacute; muốn. C&ograve;n đối với Whey Protein, do đ&atilde; qua qu&aacute; tr&igrave;nh xử l&yacute; chắt lọc n&ecirc;n hấp thu nhanh hơn, dạ d&agrave;y kh&ocirc;ng cần l&agrave;m việc nhiều gi&uacute;p hấp thu gần như trọn vẹn to&agrave;n bộ Protein.&nbsp;</p>

                                    <p>Vậy sữa tăng cơ c&oacute; hại kh&ocirc;ng đối với người tập thể h&igrave;nh? C&acirc;u trả lời l&agrave; kh&ocirc;ng v&agrave; c&ograve;n rất cần thiết, việc tập luyện cũng ảnh hưởng đến h&agrave;m lượng Protein cần nạp v&agrave;o trong ng&agrave;y. Với những vận động vi&ecirc;n c&oacute; cường độ tập luyện cao hơn v&agrave; với những mức tạ nặng hơn do đ&oacute; họ cần sử dụng thực phẩm bổ sung mỗi ng&agrave;y để đảm bảo lượng Protein nạp v&agrave;o.&nbsp;</p>

                                    <p>Một điều cần lưu &yacute; đ&oacute; l&agrave; nếu bạn đang sử dụng thực phẩm bổ sung v&agrave; đột nhi&ecirc;n ngưng lại, th&igrave; sức khỏe của bạn ho&agrave;n to&agrave;n kh&ocirc;ng bị ảnh hưởng. Tuy nhi&ecirc;n, đ&oacute; l&agrave; chỉ khi bạn cũng ngưng việc luyện tập. Nếu bạn vẫn luyện tập thường xuy&ecirc;n với cường độ cao v&agrave; kh&ocirc;ng sử dụng thực phẩm bổ sung th&igrave; cơ thể sẽ kh&oacute; c&oacute; đủ dưỡng chất cần thiết v&agrave; ph&aacute;t triển cơ kh&oacute; hơn.</p>

                                    <p>Một nhược điểm nữa của thực phẩm bổ sung sữa tăng cơ ch&iacute;nh l&agrave; về th&agrave;nh phần, do sản phẩm được chắt lọc để chứa duy nhất th&agrave;nh phần Whey tinh khiết, do đ&oacute; n&oacute; kh&ocirc;ng c&oacute; th&ecirc;m những chất dinh dưỡng kh&aacute;c đi k&egrave;m. Nếu bạn chỉ sử dụng sữa tăng cơ m&agrave; bỏ qua thức ăn tự nhi&ecirc;n th&igrave; cơ thể bạn chắc chắn sẽ bị thiếu đo c&aacute;c dưỡng chất cần thiết cho cơ thể.&nbsp;</p>

                                    <p>Như vậy, chắc hẳn bạn đ&atilde; c&oacute; thể trả lời c&acirc;u hỏi tập gym c&oacute; n&ecirc;n uống sữa tăng cơ kh&ocirc;ng? rồi phải kh&ocirc;ng n&agrave;o. C&acirc;u trả lời l&agrave; c&oacute;, v&agrave; tốt nhất l&agrave; n&ecirc;n kết hợp với thức ăn tự nhi&ecirc;n để c&oacute; đầy đủ dưỡng chất cần thiết nhất.&nbsp;</p>

                                    <p>Mong rằng qua b&agrave;i viết tr&ecirc;n, bạn đ&atilde; c&oacute; thể trả lời được c&acirc;u hỏi&nbsp;<strong>sữa tăng cơ c&oacute; hại kh&ocirc;ng</strong>&nbsp;v&agrave; c&oacute; th&ecirc;m được những kiến thức bổ &iacute;ch trong việc sử dụng sữa tăng cơ để hỗ trợ cho qu&aacute; tr&igrave;nh ph&aacute;t triển cơ bắp của m&igrave;nh. Cảm ơn bạn đ&atilde; theo d&otilde;i!</p>
                                    ',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589170777/1589170774.webp',
                'hot' => '1',
                'category_news_id' => '1',
                'views' => '8',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '4',
                'title' => '9 loại axit amin thiết yếu gồm những loại nào',
                'summary' => 'Axit Amin là thành phần cấu tạo nên Protein, việc bổ sung đầy đủ các loại axit amin thiết yếu cho cơ thể giúp cơ bắp phát triển hiệu quả, cơ thể khỏe mạnh hơn. [...]',
                'content' => '<h2>9 Axit Amin thiết yếu gồm những loại n&agrave;o?</h2>

                            <h3>1. Lysine&nbsp;</h3>

                            <p>Lysine l&agrave; một trong những loại axit amin cần thiết cho cơ thể, tổ chức dinh dưỡng Hoa Kỳ khuyến nghị n&ecirc;n nạp khoảng 38mg Lysine h&agrave;ng ng&agrave;y tr&ecirc;n 1kg trọng lượng cơ thể. Lysine c&oacute; vai tr&ograve; quan trọng trong c&aacute;c qu&aacute; tr&igrave;nh như:&nbsp;</p>

                            <p>- Tăng khả năng tổng hợp Protein trong cơ bắp</p>

                            <p>- Hấp thu canxi gi&uacute;p duy tr&igrave; sức khỏe xương khớp</p>

                            <p>- Điều chỉnh Hormone</p>

                            <p>- Tạo enzym v&agrave; kh&aacute;ng thể chống virus, tăng cường hệ miễn dịch</p>

                            <p>- Cung cấp năng lượng cho cơ thể.</p>

                            <p>- Tạo ra collagen v&agrave; elastin</p>

                            <p>Mặc d&ugrave; hiện nay chưa c&oacute; nhiều nghi&ecirc;n cứu về hậu quả khi thiếu hụt lysine tr&ecirc;n cơ thể con người, nhưng ở loại chuột th&igrave; chỉ ra rằng thiếu loại axit amin n&agrave;y sẽ dẫn đến cảm gi&aacute;c lo lắng do qu&aacute; căng thẳng.&nbsp;</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589171662/cac-loai-axit-amin-thiet-yeu-wheyshop-vn-1_compressed-1024x683_hxxzgn.jpg" style="height:454px; width:680px" type="image" /></p>

                            <h3>2. Histidine</h3>

                            <p>Histidine tạo điều kiện cho sự h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển của c&aacute;c tế b&agrave;o m&aacute;u, cũng như hỗ trợ t&aacute;i tạo lại c&aacute;c m&ocirc;, loại&nbsp;<strong>axit amin thiết yếu</strong>&nbsp;n&agrave;y cũng c&oacute; t&aacute;c dụng duy tr&igrave; lớp bảo vệ bao phủ quanh tế b&agrave;o.</p>

                            <p>Cơ thể sẽ chuyển h&oacute;a histidine th&agrave;nh Histamine &ndash; một loại chất dẫn chuyền thần kinh c&oacute; t&aacute;c dụng:&nbsp;</p>

                            <p>- Tăng khả năng phản ứng miễn dịch</p>

                            <p>- Cải thiện sức khỏe sinh sản &ndash; t&igrave;nh dục&nbsp;</p>

                            <p>- Chu kỳ thức &ndash; ngủ sinh học</p>

                            <p>- Chức năng hệ ti&ecirc;u h&oacute;a.&nbsp;</p>

                            <p>Một số nghi&ecirc;n cứu đ&atilde; chứng minh ở những người phụ nữ bị tiểu đường cho thấy việc cung cấp Histidine gi&uacute;p c&aacute;c bệnh nh&acirc;n giảm chỉ số BMI, v&agrave; giảm t&igrave;nh trạng kh&aacute;ng insulin của họ. Thiếu Histidine g&acirc;y nguy cơ cao thiếu m&aacute;u,&nbsp; đặc biệt l&agrave; ở những người bị vi&ecirc;m khớp v&agrave; bệnh thận.&nbsp;</p>

                            <p>H&agrave;m lượng cần thiết của Histidine: 14mg / 1kg cơ thể.&nbsp;</p>

                            <h3>3. Threonine</h3>

                            <p>H&agrave;m lượng cần d&ugrave;ng h&agrave;ng ng&agrave;y: 20mg/1kg cơ thể</p>

                            <p>Threonine rất cần thiết cho l&agrave;n da săn chắc v&agrave; h&agrave;m răng khỏe mạnh. Loại&nbsp;<em>Axit Amin thiết yếu</em>&nbsp;n&agrave;y l&agrave; th&agrave;nh phần ch&iacute;nh của c&aacute;c Protein như collagen hay elastin, c&oacute; trong men răng, da v&agrave; m&ocirc; kết. Threonine c&ograve;n c&oacute; t&aacute;c dụng chuyển h&oacute;a chất b&eacute;o th&agrave;nh năng lượng, v&agrave; cải thiện hệ miễn dịch.</p>

                            <p>Một nghi&ecirc;n cứu v&agrave;o năm 2018 cho thấy việc thiếu Threonine ở loại c&aacute; sẽ khiến ch&uacute;ng c&oacute; khả năng đề kh&aacute;ng v&agrave; miễn dịch k&eacute;m hơn.&nbsp;</p>

                            <h3>4. Methionine</h3>

                            <p>H&agrave;m lượng cần thiết trong 1 ng&agrave;y: 19mg / 1kg cơ thể</p>

                            <p>Methionine chịu tr&aacute;ch nhiệm cho sự chắc khỏe của da, t&oacute;c v&agrave; m&oacute;ng tay. Bổ sung axit amin n&agrave;y cũng rất cần thiết cho việc trao đổi chất v&agrave; thải độc, cụ thể, Methionine c&oacute; c&ocirc;ng dụng như sau:&nbsp;</p>

                            <p>- Gi&uacute;p ph&aacute;t triển m&ocirc;</p>

                            <p>- Hấp thu c&aacute;c kho&aacute;ng chất quan trọng như Kẽm hay Selen.</p>

                            <p>- Loại bỏ c&aacute;c kim loại nặng như ch&igrave;, hoặc thủy ng&acirc;n.&nbsp;</p>

                            <h3>5. Valine</h3>

                            <p>H&agrave;m lượng cần thiết trong 1 ng&agrave;y: 24mg/ 1kg cơ thể</p>

                            <p>Valine l&agrave; một trong chuỗi Axit amin ph&acirc;n nh&aacute;nh, c&ugrave;ng với leucine v&agrave; isoleucine hay c&ograve;n được gọi l&agrave;&nbsp;<a href="https://wheyshop.vn/category/bcaa" target="_blank" title="BCAA">BCAA</a>&nbsp;m&agrave; những người tập gym thường sử dụng. Valine c&oacute; c&aacute;c t&aacute;c dụng như:&nbsp;</p>

                            <p>- K&iacute;ch th&iacute;ch tăng trưởng v&agrave; t&aacute;i tạo cơ bắp</p>

                            <p>- Hỗ trợ phối hợp vận động giữa c&aacute;c cơ</p>

                            <p>- Tham gia v&agrave;o qu&aacute; tr&igrave;nh sản sinh năng lượng</p>

                            <p>- Gi&uacute;p tập trung tinh thần, kiểm so&aacute;t cảm x&uacute;c.</p>

                            <p>Thiếu hụt&nbsp;<strong>axit amin thiết yếu</strong>&nbsp;n&agrave;y c&oacute; thể g&acirc;y mất ngủ v&agrave; sa s&uacute;t tinh thần.&nbsp;</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589171726/cac-loai-axit-amin-thiet-yeu-wheyshop-vn-2_compressed_nzftli.jpg" style="height:523px; width:650px" type="image" /></p>

                            <h3>6. Leucine&nbsp;</h3>

                            <p>H&agrave;m lượng cần thiết trong 1 ng&agrave;y: 42mg/ 1kg cơ thể&nbsp;</p>

                            <p>Tương tự Valine, Leucine cũng rất cần thiết cho qu&aacute; tr&igrave;nh tổng hợp Protein trong cơ bắp, cụ thể n&oacute; c&oacute; t&aacute;c dụng như:&nbsp;</p>

                            <p>- Hỗ trợ t&aacute;i tạo m&ocirc; cơ v&agrave; ph&aacute;t triển cơ xương&nbsp;</p>

                            <p>- Điều chỉnh lượng đường trong m&aacute;u&nbsp;</p>

                            <p>- K&iacute;ch th&iacute;ch chữa l&agrave;nh vết thương</p>

                            <p>- Sản xuất hormone tăng trưởng</p>

                            <p>Thiếu hụt Leucine c&oacute; thể g&acirc;y ra t&igrave;nh trạng ph&aacute;t ban ở da, rụng t&oacute;c v&agrave; mệt mỏi</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589171780/cac-loai-axit-amin-thiet-yeu-wheyshop-vn-3_compressed-1024x576_zkj9ei.jpg" style="height:366px; width:650px" type="image" /></p>

                            <h3>7. Isoleucine&nbsp;</h3>

                            <p>H&agrave;m lượng cần thiết trong mỗi ng&agrave;y: 19mg/ 1kg cơ thể.&nbsp;</p>

                            <p>Isoleucine l&agrave; th&agrave;nh phần cuối c&ugrave;ng trong chuỗi axit amin ph&acirc;n nh&aacute;nh, chủ yếu tồn tại ở c&aacute;c m&ocirc; cơ v&agrave; đảm nhiệm vai tr&ograve;:&nbsp;</p>

                            <p>- Chữa l&agrave;nh vết thương&nbsp;</p>

                            <p>- Tăng miễn dịch v&agrave; trao đổi chất ở cơ bắp</p>

                            <p>- Điều chỉnh lượng đường trong m&aacute;u</p>

                            <p>- Sản xuất hormone v&agrave; huyết sắc tố</p>

                            <p>- Điều tiết mức năng lượng&nbsp;</p>

                            <p>Người lớn tuổi c&oacute; nguy cơ thiếu Isoleucine so với người trưởng th&agrave;nh, đ&acirc;y ch&iacute;nh l&agrave; l&yacute; do khiến người gi&agrave; thường bị teo cơ v&agrave; run rẩy.&nbsp;</p>

                            <h3>8. Phenylalanine</h3>

                            <p>Phenylalanin l&agrave; tiền tố của chất dẫn truyền thần kinh, bao gồm tyrosine, dopamine, epinephrine v&agrave; norepinephrine. Đ&acirc;y l&agrave; loại axit amin kh&ocirc;ng thể thiếu trong cấu tr&uacute;c, chức năng của Protein v&agrave; Enzym, sản xuất v&agrave; gi&uacute;p cơ thể sử dụng c&aacute;c axit amin kh&aacute;c. Trong khi đ&oacute;, Tyrosine &ndash; chất được chuyển h&oacute;a từ Phenylalanine, rất cần thiết cho c&aacute;c chức năng của n&atilde;o bộ.&nbsp;</p>

                            <h3>9. Tryptophan&nbsp;</h3>

                            <p>H&agrave;m lượng cần thiết trong một ng&agrave;y: 5mg/1kg cơ thể</p>

                            <p>Tryptophan rất cần thiết cho qu&aacute; tr&igrave;nh tăng trưởng v&agrave; ph&aacute;t triển cơ trẻ nhỏ. Gi&uacute;p duy tr&igrave; c&acirc;n bằng Ni tơ v&agrave; l&agrave; tiền chất của Serotonine v&agrave; Melatonine trong đ&oacute;:&nbsp;</p>

                            <p>- <em><u>Serotonine</u></em>: l&agrave; một chất dẫn truyền thần kinh gi&uacute;p điều chỉnh cảm gi&aacute;c th&egrave;m ăn, giấc ngủ, t&acirc;m trạng v&agrave; cảm gi&aacute;c đau</p>

                            <p>- <u><em>Melatonine</em></u>: cũng c&oacute; t&aacute;c dụng điều h&ograve;a giấc ngủ</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589171832/cac-loai-axit-amin-thiet-yeu-wheyshop-vn-4_compressed_oyggbz.jpg" style="height:488px; width:650px" type="image" /></p>

                            <p><u><em>Tryptophan </em></u>được xem l&agrave; loại thuốc an thần v&agrave; l&agrave; th&agrave;nh phần c&oacute; trong c&aacute;c dược phẩm hỗ trợ giấc ngủ. Thiếu hụt tryptophan c&oacute; thể g&acirc;y ra bệnh pellagra, nguy cơ mất tr&iacute; nhớ, ph&aacute;t ban tr&ecirc;n da v&agrave; c&aacute;c vấn đề ti&ecirc;u h&oacute;a.</p>

                            <p>Qua b&agrave;i viết tr&ecirc;n, Gymer Store&nbsp;đ&atilde; gi&uacute;p bạn t&igrave;m hiểu được c&aacute;c loại&nbsp;<strong>axit amin thiết yếu</strong>&nbsp;m&agrave; cơ thể cần phải bổ sung rồi đ&oacute;. H&atilde;y lựa chọn những loại thực phẩm c&oacute; chứa đầy đủ c&aacute;c axit amin n&agrave;y để c&oacute; một cơ thể khỏe mạnh v&agrave; tinh thần thoải m&aacute;i nhất nh&eacute;. Cảm ơn bạn đ&atilde; theo d&otilde;i!</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/c_fit/1589172352.png',
                'hot' => '1',
                'category_news_id' => '1',
                'views' => '14',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '5',
                'title' => 'Cách tập cơ xô với tạ đôi',
                'summary' => 'Cơ lưng, xô là nhóm cơ quan trọng để bạn có được một body đẹp hoàn chỉnh. Tuy nhiên, không phải ai cũng biết [...]',
                'content' => '<p><strong>Cơ lưng, x&ocirc; l&agrave; nh&oacute;m cơ quan trọng để bạn c&oacute; được một body đẹp ho&agrave;n chỉnh. Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng biết n&ecirc;n bắt đầu từ đ&acirc;u v&agrave; c&aacute;ch luyện tập như n&agrave;o cho đ&uacute;ng. Ngay sau đ&acirc;y, h&atilde;y c&ugrave;ng Dinh Dưỡng Thể H&igrave;nh t&igrave;m hiểu c&aacute;ch tập cơ x&ocirc; với tạ đ&ocirc;i ngay trong b&agrave;i viết sau.&nbsp;</strong></p>

                            <p>Để c&oacute; thể sở hữu khối lưng x&ocirc; to đẹp v&agrave; n&eacute;t th&igrave; đầu ti&ecirc;n bạn cần phải c&oacute; một &yacute; thực tập thật tốt v&agrave; một &yacute; ch&iacute; ki&ecirc;n tr&igrave; ki&ecirc;n cường. Ngo&agrave;i ra, điều cơ bản nhất để x&acirc;y dựng được cơ bắp đ&oacute; ch&iacute;nh l&agrave; dinh dưỡng, h&atilde;y ch&uacute; &yacute; đến chế độ ăn của m&igrave;nh thật hợp l&yacute; để c&oacute; đủ lượng protein x&acirc;y dựng cơ bắp. Sau đ&acirc;y l&agrave; những b&agrave;i tập cơ x&ocirc; với tạ đ&ocirc;i m&agrave; bạn n&ecirc;n biết đến:</p>

                            <h2>Deadlift&nbsp;</h2>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589177411/tap-co-xo-voi-ta-doi-wheyshop-vn-5_compressed_om9mwo.jpg" style="width: 654px; height: 368px;" type="image" /></p>

                            <p>Đ&acirc;y l&agrave; b&agrave;i tập chắc chắn kh&ocirc;ng thể thiếu trong những b&agrave;i tập lưng x&ocirc; được rồi. Đ&acirc;y kh&ocirc;ng những l&agrave; b&agrave;i tập gi&uacute;p ph&aacute;t triển cơ lưng x&ocirc; một c&aacute;ch tối ưu m&agrave; n&oacute; c&ograve;n gi&uacute;p giảm mỡ to&agrave;n th&acirc;n v&agrave; tăng cơ bắp to&agrave;n diện. Đ&oacute; l&agrave; l&yacute; do tại sao n&oacute; được gọi l&agrave; &ocirc;ng ho&agrave;ng của c&aacute;c b&agrave;i tập.&nbsp;</p>

                            <p>C&aacute;ch thực hiện như sau:&nbsp;</p>

                            <p>- Bắt đầu với tư thế hai ch&acirc;n rộng bằng vai, hai tay nắm chặt thanh tạ sao - cho mặt trong của hai khuỷu tay &aacute;p s&aacute;t với phần ngo&agrave;i của đ&ugrave;i&nbsp;</p>

                            <p>- K&eacute;o thanh đ&ograve;n s&aacute;t lại gần ống ch&acirc;n, hạ người xuống theo tư thế squat&nbsp;</p>

                            <p>- D&ugrave;ng lực g&oacute;t ch&acirc;n ấn xuống s&agrave;n, siết cơ m&ocirc;ng, đ&ugrave;i sau v&agrave; lưng để k&eacute;o tạ l&ecirc;n</p>

                            <p>- Khi tạ l&ecirc;n ngang đ&ugrave;i th&igrave; đẩy lưng thẳng h&ocirc;ng hướng ra trước</p>

                            <p>- Từ từ hạ thanh đ&ograve;n xuống s&agrave;n v&agrave; lặp lại&nbsp;</p>

                            <p>Lưu &yacute;: khi hạ thanh đ&ograve;n xuống s&agrave;n bạn tuyệt đối kh&ocirc;ng được cong lưng, kh&ocirc;ng được thả lỏng cơ nếu kh&ocirc;ng sẽ rất dễ bị chấn thương khớp lưng dưới.&nbsp;</p>

                            <h2>Bent Over Barbell &ndash; gập người k&eacute;o tạ đ&ocirc;i</h2>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589177492/tap-co-xo-voi-ta-doi-wheyshop-vn_compressed_s9rmae.jpg" style="width: 680px; height: 437px;" type="image" /></p>

                            <p>B&agrave;i tập lưng x&ocirc; n&agrave;y t&aacute;c động hiệu quả đến gần như to&agrave;n bộ phần lưng x&ocirc; ph&iacute;a sau, t&aacute;c động ch&iacute;nh của n&oacute; l&agrave; về phần lưng giữa, cơ x&ocirc; v&agrave; vai. B&agrave;i tập n&agrave;y gi&uacute;p ph&aacute;t triển sức mạnh, khả năng chịu đựng của cơ thể, hỗ trợ rất tốt cho c&aacute;c b&agrave;i tập kh&aacute;c.&nbsp;</p>

                            <p>Thực hiện như sau:&nbsp;</p>

                            <p>- Bắt đầu với tư thế đứng thẳng người, hai tay nắm chặt thanh tạ, l&ograve;ng b&agrave;n tay hướng ra sau người&nbsp;</p>
                            <p>- Đầu gối hơi cong xuống, người hơi hướng về ph&iacute;a trước v&agrave; giữ thẳng lưng</p>
                            <p>- D&ugrave;ng khuỷu tay k&eacute;o tạ l&ecirc;n về ph&iacute;a người bạn, đến vị tr&iacute; cao nhất th&igrave; giữ trong 1 &ndash; 2 gi&acirc;y&nbsp;</p>
                            <p>- Từ từ hạ xuống vị tr&iacute; ban đầu sau đ&oacute; lặp lại</p>

                            <p>Lưu &yacute;: Đối với b&agrave;i tập n&agrave;y bạn c&oacute; thể tập nặng hơn, nhưng nếu bạn l&agrave; người mới tập th&igrave; n&ecirc;n hạ khối lượng tạ xuống khoảng 50% v&agrave; luyện tập kỹ thuật trước, khi bạn đ&atilde; quen rồi th&igrave; bạn c&oacute; thể n&acirc;ng dần mức tạ l&ecirc;n. Ngo&agrave;i ra, bạn tuyệt đối phải giữ thẳng lưng tự nhi&ecirc;n, tr&aacute;nh bị chấn thương lưng dưới rất nguy hiểm.&nbsp;</p>

                            <h2>B&agrave;i tập đứng k&eacute;o tạ chữ T &ndash; Standing T-bar Row</h2>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589177581/tap-co-xo-voi-ta-doi-wheyshop-vn-2_compressed-768x710_vaugao.jpg" style="width: 670px; height: 619px;" type="image" /></p>

                            <p>Đ&acirc;y l&agrave; một dạng b&agrave;i tập n&acirc;ng cao hơn một ch&uacute;t c&oacute; t&aacute;c dụng rất tốt cho việc ph&aacute;t triển nh&oacute;m cơ lưng giữa v&agrave; cơ x&ocirc;. Th&ocirc;ng thường, b&agrave;i tập n&agrave;y chỉ y&ecirc;u cầu bạn sử dụng 1 đầu của thanh đ&ograve;n, đầu c&ograve;n lại sẽ cố định v&agrave;o đ&acirc;u đ&oacute;. Một số ph&ograve;ng tập c&oacute; m&aacute;y tập th&igrave; bạn c&oacute; thể tận dụng sẽ an to&agrave;n hơn.&nbsp;</p>

                            <p>B&agrave;i tập thực hiện như sau:</p>

                                <p>Cố định 1 đầu của thanh đ&ograve;n, đầu kia lắp tạ, hai ch&acirc;n đứng giữa thanh đ&ograve;n, người hướng về ph&iacute;a b&ecirc;n tạ&nbsp;</p>
                                <p>Hai tay &ocirc;m trọn thanh đ&ograve;n thật chắc, nếu bạn c&oacute; tay cầm T-bar th&igrave; sẽ tốt hơn&nbsp;</p>
                                <p>Siết cơ bụng lại, đầu gối hơi tr&ugrave;ng, người ngả về ph&iacute;a trước, lưng thẳng tự nhi&ecirc;n</p>
                                <p>K&eacute;o đ&ograve;n tạ l&ecirc;n bằng c&aacute;ch siết cơ x&ocirc; v&agrave; &eacute;p hai bả vai lại, giữ tại vị tr&iacute; cao nhất thừ 1 &ndash; 2 gi&acirc;y&nbsp;</p>
                                <p>Từ từ hạ xuống v&agrave; thực hiện lại&nbsp;</p>

                            <h2>Tập k&eacute;o tạ ngược tr&ecirc;n m&aacute;y Smith &ndash; Bent Over Row Reverse Grip Smith</h2>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589177663/tap-co-xo-voi-ta-doi-wheyshop-vn-3_compressed-768x513_sbbejf.jpg" style="width: 650px; height: 434px;" type="image" /></p>

                            <p>Đ&acirc;y l&agrave; b&agrave;i tập tương đương với b&agrave;i gập người k&eacute;o tạ đ&ocirc;i. Tuy nhi&ecirc;n, khi bạn tập c&ugrave;ng m&aacute;y Smith sẽ gi&uacute;p bạn dễ thực hiện b&agrave;i tập n&agrave;y hơn v&agrave; cho ph&eacute;p tập nặng hơn, rất ph&ugrave; hợp với những bạn mới tập chưa quen kỹ thuật. Khi đ&atilde; quen với việc tập tr&ecirc;n m&aacute;y Smith rồi, bạn c&oacute; thể chuyển sang tập với tạ ngo&agrave;i thay v&igrave; tập với m&aacute;y. Ngo&agrave;i ra khi bạn cầm ngược tay, t&aacute;c động l&ecirc;n phần cơ lưng x&ocirc; sẽ tốt hơn, gi&uacute;p bạn ph&aacute;t triển cơ bắp nhanh ch&oacute;ng</p>

                            <h2>K&eacute;o tạ 1 tay tr&ecirc;n m&aacute;y Smith&nbsp;</h2>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589177707/tap-co-xo-voi-ta-doi-wheyshop-vn-1_compressed_ydkpx9.jpg" style="width: 600px; height: 399px;" type="image" /></p>

                            <p>Tương tự như b&agrave;i k&eacute;o cơ x&ocirc; 1 tay với tạ đơn, b&agrave;i n&agrave;y bạn sẽ tập tr&ecirc;n m&aacute;y Smith. B&agrave;i tập n&agrave;y t&aacute;c động ho&agrave;n to&agrave;n đến phần cơ x&ocirc;, gi&uacute;p bạn c&oacute; cơ x&ocirc; rộng v&agrave; d&agrave;y hơn. Một điểm kh&aacute;c nữa đ&oacute; l&agrave; thay v&igrave; sử dụng ghế tập như tạ đơn th&igrave; b&agrave;i n&agrave;y bạn c&oacute; thể đứng tập.</p>

                            <p>Động t&aacute;c thực hiện như sau:&nbsp;</p>

                                <p>Bắt đầu với tư thế tay phải cầm thanh đ&ograve;n, tay tr&aacute;i chống l&ecirc;n đầu gối tr&aacute;i, ch&acirc;n tr&aacute;i ở trước, ch&acirc;n phải ở sau v&agrave; hai đầu gối hơi tr&ugrave;ng</p>
                                <p>Tay phải cầm tạ k&eacute;o l&ecirc;n, c&ugrave;i chỏ &eacute;p s&aacute;t v&agrave;o th&acirc;n người</p>
                                <p>Hạ từ từ tạ xuống v&agrave; lặp lại như tr&ecirc;n.</p>

                            <p>B&agrave;i tập n&agrave;y c&ograve;n c&oacute; một biến thể đ&oacute; l&agrave; tập với thanh T-bar, thay v&igrave; đứng giữa thanh đ&ograve;n th&igrave; bạn sẽ đứng ngang người ở đầu b&aacute;nh tạ, tư thế giống như khi k&eacute;o tạ với m&aacute;y Smith với tay phải cầm v&agrave;o đầu thanh tạ, tay tr&aacute;i chống v&agrave;o gối, sau đ&oacute; k&eacute;o l&ecirc;n.&nbsp;</p>

                            <p>Tr&ecirc;n đầy l&agrave; c&aacute;ch tập cơ x&ocirc; với tạ đ&ocirc;i m&agrave; Gymer Store&nbsp;đ&atilde; gợi &yacute; cho bạn, h&atilde;y ki&ecirc;n tr&igrave; tập luyện thật tốt để c&oacute; được một khối cơ lưng x&ocirc; rộng v&agrave; chắc khỏe nh&eacute;.</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589178046/xo_h7vfvx.jpg',
                'hot' => '1',
                'category_news_id' => '2',
                'views' => '10',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '6',
                'title' => 'Hướng dẫn cách tập cơ ngực đúng cách giúp ngực nở to hiệu quả nhất',
                'summary' => 'Bộ ngực nở nang và săn chắc luôn luôn là điểm thu hút của mọi chàng trai gymer, đặc biệt là [...]',
                'content' => '<p><strong>Bộ ngực nở nang v&agrave; săn chắc lu&ocirc;n lu&ocirc;n l&agrave; điểm thu h&uacute;t của mọi ch&agrave;ng trai gymer. Bạn đ&atilde; c&oacute; c&aacute;ch tập cơ ngực đ&uacute;ng c&aacute;ch cho m&igrave;nh chưa. Nếu chưa th&igrave; h&atilde;y tham khảo ngay c&aacute;ch tập cơ ngực đ&uacute;ng c&aacute;ch gi&uacute;p ngực nở to hiệu quả nhất ngay trong b&agrave;i viết n&agrave;y nh&eacute;.&nbsp;</strong></p>

                            <h2>Tập cơ ngực hiệu quả c&ugrave;ng với HLV Alex Savva</h2>

                            <p>Hầu hết c&aacute;c bạn đều sẽ tập c&aacute;c b&agrave;i đẩy ngực giữa, ngực tr&ecirc;n v&agrave; dưới sau đ&oacute; đến những b&agrave;i cắt n&eacute;t fly. Tuy nhi&ecirc;n, sẽ đến một ng&agrave;y cơ bắp của bạn quen với việc luyện tập đ&oacute; v&agrave; từ đ&oacute; giảm đi sự ph&aacute;t triển cơ bắp của bạn. Khi đ&oacute;, bạn sẽ cần những k&iacute;ch th&iacute;ch mới, những g&oacute;c tập mới v&agrave; những b&agrave;i tập dưới đ&acirc;y của HLV Alex Savva sẽ l&agrave; cứu tinh của bạn trong trường hợp n&agrave;y.&nbsp;</p>

                            <p>&nbsp;</p>

                            <h2>180-Degree Twisting Dumbbell Bench Press</h2>

                            <p>Chắc hẳn c&aacute;c bạn đ&atilde; quen với việc sử dụng tạ đơn để đẩy ngực rồi đ&uacute;ng khống, b&agrave;i tập đẩy ngực với tạ đơn rất tốt cho việc ph&aacute;t triển cơ ngực v&agrave; n&oacute; c&ograve;n gi&uacute;p chống lệch cơ ngực nữa đ&oacute;. Trong b&agrave;i tập n&agrave;y, thay v&igrave; bạn đẩy ngực như th&ocirc;ng thường th&igrave; bạn sẽ t&ugrave;y biến một ch&uacute;t bằng c&aacute;ch xoay tay khi thực hiện b&agrave;i tập để tận dụng những lợi &iacute;ch khi sử dụng l&ograve;ng b&agrave;n tay ngược. C&aacute;c nghi&ecirc;n cứu đ&atilde; chỉ ra rằng việc đẩy ngực với l&ograve;ng b&agrave;n tay ngược c&oacute; t&aacute;c dụng tốt hơn so với để tay xu&ocirc;i.&nbsp;</p>

                            <p>C&aacute;ch thực hiện như sau:&nbsp;</p>

                            <p>- Nằm ngửa l&ecirc;n ghế tập, hai tay cầm tạ đơn như tư thế Bench Press cơ bản&nbsp;</p>

                            <p>- Hạ tạ từ từ xuống, sau đ&oacute; đẩy hai tay l&ecirc;n đồng thời xoay tay sao cho l&ograve;ng b&agrave;n tay hướng v&agrave;o th&acirc;n m&igrave;nh. Giữ vị tr&iacute; trong 2 gi&acirc;y trước khi hạ xuống&nbsp;</p>

                            <p>- Từ từ hạ tạ về vị tr&iacute; ban đầu khi hạ tạ v&agrave; thực hiện lại&nbsp;</p>

                            <p>Lưu &yacute; khi tập: bạn n&ecirc;n tập với mức tạ vừa phải khi mới tập b&agrave;i n&agrave;y, khi đ&atilde; quen th&igrave; h&atilde;y n&acirc;ng mức tạ dần dần l&ecirc;n, ngo&agrave;i ra bạn n&ecirc;n giữ vững phần vai cố định khi tập sẽ gi&uacute;p hiệu quả hơn.</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589178324/tap-nguc-no-to-wheyshop-vn-768x512_ahtehu.jpg" style="width: 650px; height: 433px;" type="image" /></p>

                            <h2>Close-Grip Weighted Push-Up&nbsp;</h2>

                            <p>H&iacute;t đ&atilde; l&agrave; một trong những b&agrave;i tập qu&aacute; quen thuộc đối với việc tập cơ ngực. Tuy nhi&ecirc;n khi bạn tập l&acirc;u th&igrave; việc n&agrave;y sẽ &iacute;t hiệu quả đi, khi đ&oacute;, h&atilde;y cho th&ecirc;m tạ l&ecirc;n tr&ecirc;n người nữa.&nbsp;</p>

                            <p>Sử dụng khoảng c&aacute;ch tay hẹp hơn để sẽ đẩy phần giữa của cơ ngực mạnh hơn, kết hợp với một b&aacute;nh tạ tr&ecirc;n lưng th&igrave; sẽ v&ocirc; c&ugrave;ng hiệu quả.&nbsp;</p>

                            <p>C&aacute;ch thực hiện như sau:&nbsp;</p>

                            <p>- V&agrave;o tư thế h&iacute;t đất với hai c&aacute;nh tay c&aacute;ch nhau khoảng 15cm, đặt th&ecirc;m 1 b&aacute;nh tạ tr&ecirc;n lưng bạn&nbsp;</p>

                            <p>- Từ từ hạ thấp người xuống v&agrave; đẩy l&ecirc;n về vị tr&iacute; ban đầu.</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589178388/tap-nguc-no-to-wheyshop-vn-1_t7oj55.jpg" style="width: 650px; height: 353px;" type="image" /></p>

                            <h2>Cable Crossover 21s</h2>

                            <p>Tập ngực với c&aacute;p l&agrave; b&agrave;i tập rất tốt cho nh&oacute;m cơ ngực. Điều th&uacute; vị ch&iacute;nh l&agrave; khi tập với c&aacute;p th&igrave; bạn c&oacute; thể điều chỉnh độ cao thấp rất linh hoạt. B&agrave;i tập Cable Crossover 21s c&oacute; nghĩa l&agrave; bạn sẽ tập cơ ngực bằng c&aacute;p với 3 b&agrave;i tập, mỗi b&agrave;i sẽ c&oacute; một vị tr&iacute; c&aacute;p ri&ecirc;ng v&agrave; tập với 7 lần đối với mỗi vị tr&iacute;.&nbsp;</p>

                            <p>Thực hiện như sau:&nbsp;</p>

                            <p>7 Rep đầu ti&ecirc;n với vị tr&iacute; c&aacute;p thấp&nbsp;</p>

                            <p>- Bắt đầu với vị tr&iacute; c&aacute;p thấp, đứng tiến về ph&iacute;a trước với một ch&acirc;n trước một ch&acirc;n sau, đ&acirc;y l&agrave; tư thế cho cả 3 vị tr&iacute; của d&acirc;y c&aacute;p</p>

                            <p>- Siết chặt cơ ngực v&agrave; k&eacute;o 2 tay về ph&iacute;a trước ngực, sau đ&oacute; hạ từ từ về vị tr&iacute; ban đầu&nbsp;</p>

                            <p>- Tập 7 lần với vị tr&iacute; n&agrave;y&nbsp;</p>

                            <p>7 Rep tiếp theo với vị tr&iacute; d&acirc;y c&aacute;p ngang người&nbsp;</p>

                            <p>- Di chuyển d&acirc;y c&aacute;p l&ecirc;n vị tr&iacute; ch&iacute;nh giữa, nắm lấy hai tay cầm, hai l&ograve;ng b&agrave;n tay hướng v&agrave;o nhau&nbsp;</p>

                            <p>- Di chuyển hai tay ra sau sao cho đến khi thấy căng phần cơ ngực nhẹ, sau đ&oacute; đẩy lại hai tay về vị tr&iacute; ban đầu v&agrave; lặp lại trong 7 lần&nbsp;</p>

                            <p>7 rep cuối với vị tr&iacute; c&aacute;p cao&nbsp;</p>

                            <p>- Di chuyển d&acirc;y c&aacute;p l&ecirc;n vị tr&iacute; cao nhất&nbsp;</p>

                            <p>- Tay cầm sẽ hướng xuống phần bụng của bạn v&agrave; l&ograve;ng b&agrave;n tay vẫn hướng v&agrave;o nhau.</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589178492/tap-nguc-no-to-wheyshop-vn-3-768x512_ee9aws.jpg" style="width: 650px; height: 433px;" type="image" /></p>

                            <h2>B&agrave;i tập KettleBell Fly</h2>

                            <p>C&aacute;c b&agrave;i fly cắt n&eacute;t cơ m&agrave; c&aacute;c bạn thường sử dụng l&agrave; với tạ đơn, tuy nhi&ecirc;n trong b&agrave;i n&agrave;y, thay v&igrave; sử dụng tạ đơn. Ta sẽ sử dụng tạ chu&ocirc;ng thay thế tạ đơn, khi đ&oacute; cơ ngực sẽ cần tăng cường nhiều sợi cơ hơn để tập luyện v&agrave; từ đ&oacute; sẽ ph&aacute;t triển cơ ngực tốt hơn.&nbsp;</p>

                            <p>C&aacute;ch thực hiện như sau:&nbsp;</p>

                            <p>- Nằm ngửa tr&ecirc;n ghế tập, mỗi tay cầm một quả tạ chu&ocirc;ng, c&ugrave;i chỏ hơi cong nhẹ</p>

                            <p>- Từ từ mở rộng c&aacute;nh tay sang hai b&ecirc;n, khuỷu tay vẫn giữ cố định vị tr&iacute; của m&igrave;nh, mở rộng đến khi cơ ngực cảm thấy hơi căng nhẹ</p>

                            <p>- Gồng cơ ngực v&agrave; đẩy tạ về vị tr&iacute; ban đầu, &eacute;p ngực lại với nhau đến khi l&ecirc;n vị tr&iacute; đỉnh.&nbsp;</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589178557/tap-nguc-no-to-wheyshop-vn-4_fxuoj7.jpg" style="width: 650px; height: 435px;" type="image" /></p>

                            <h2>Forward-Leaning Dip&nbsp;</h2>

                            <p>B&agrave;i Dip th&igrave; c&oacute; lẽ đẫ rất quen thuộc đối với những người tập gym rồi, đ&acirc;y l&agrave; b&agrave;i tập nh&igrave;n đơn giản nhưng thật sự kh&ocirc;ng hề dễ tập. Đặc biệt l&agrave; đối với người mới, v&igrave; khi tập bạn sẽ sử dụng ch&iacute;nh sức nặng cơ thể của m&igrave;nh v&agrave; dồn l&ecirc;n tay do đ&oacute; kh&ocirc;ng hề dễ d&agrave;ng g&igrave;.&nbsp;</p>

                            <p>Để tập b&agrave;i n&agrave;y v&agrave; v&agrave;o cơ ngực th&igrave; bạn cần nghi&ecirc;ng người một ch&uacute;t về ph&iacute;a trước, c&aacute;ch tốt nhất đ&oacute; ch&iacute;nh l&agrave; nhờ một bạn tập giữ phần ch&acirc;n của m&igrave;nh v&agrave; k&eacute;o về sau một ch&uacute;t, khi đ&oacute; sẽ dễ d&agrave;ng tập hơn.&nbsp;</p>

                            <p>B&agrave;i tập n&agrave;y kh&ocirc;ng th&iacute;ch hợp đối với những ai c&oacute; vấn đề về cơ vai. Bạn h&atilde;y thực hiện b&agrave;i tập với sức nặng cơ thể trước để l&agrave;m quen dần, khi đ&atilde; quen th&igrave; bạn c&oacute; thể tăng th&ecirc;m mức tạ l&ecirc;n. Tất nhi&ecirc;n bạn phải tập đầy đủ ROM đ&oacute; nh&eacute;.&nbsp;</p>

                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589178615/tap-nguc-no-to-wheyshop-vn-2_zqac6x.jpg" style="height:373px; width:650px" type="image" /></p>

                            <p>Tr&ecirc;n đ&acirc;y l&agrave; c&aacute;ch tập cơ ngực đ&uacute;ng c&aacute;ch gi&uacute;p ngực nở to hiệu quả nhất m&agrave; Dinh Dưỡng Thể H&igrave;nh đ&atilde; gi&uacute;p bạn t&igrave;m hiểu. H&atilde;y ki&ecirc;n tr&igrave; luyện tập để c&oacute; được một bộ ngực nở nang v&agrave; săn chắc nh&eacute;. Ch&uacute;c bạn sớm th&agrave;nh c&ocirc;ng!</p>
                            ',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589179029/SoYfCfmbT-Q_I0EKWpBCpk1Jg-dgt2oIEM6MQ8mGQZwqSgiKok5xtSedQmSMi7SntQvN1InQTgOs7RIlU88Inocif7qI2iMgE4FVFNm9OHdk_nloe1e.jpg',
                'hot' => '1',
                'category_news_id' => '2',
                'views' => '19',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '7',
                'title' => 'Bài tập Yoga cho lưng và cổ thẳng',
                'summary' => 'Lưng và cổ thẳng là điều quan trọng nếu như bạn muốn có một cơ thể khỏe mạnh, tự tin và thậm chí là thon thả[...]',
                'content' => '<p><strong>Lưng v&agrave; cổ thẳng l&agrave; điều quan trọng nếu như bạn muốn c&oacute; một cơ thể khỏe mạnh, tự tin v&agrave; thậm ch&iacute; l&agrave; thon thả. H&atilde;y c&ugrave;ng Gymer Store&nbsp;t&igrave;m hiểu ngay những b&agrave;i tập yoga cho lưng v&agrave; cổ thẳng ngay trong b&agrave;i viết sau đ&acirc;y nh&eacute;.&nbsp;</strong></p>

                                <p>Việc giữ tư thế lưng thẳng ảnh hưởng rất nhiều đến vấn đề về sức khỏe cũng như nhiều vấn đề kh&aacute;c. Tuy nhi&ecirc;n, thực sự kh&ocirc;ng c&oacute; nhiều người để &yacute; đến điều n&agrave;y do kh&ocirc;ng hiểu hết được những lợi &iacute;ch mang lại. Đa phần người Việt Nam thường kh&ocirc;ng để &yacute; đến do đ&oacute; rất nhiều người đặc biệt l&agrave; học sinh v&agrave; người đi l&agrave;m văn ph&ograve;ng thường hay bị g&ugrave; lưng, l&agrave;m mất tự tin thậm ch&iacute; ảnh hưởng đến cả sức khỏe cơ xương khớp. Sau đ&acirc;y l&agrave; 6 b&agrave;i tập yoga gi&uacute;p cho lưng v&agrave; cổ thẳng.&nbsp;</p>

                                <h2>B&agrave;i tập chắp tay sau lưng</h2>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589179205/bai-tap-yoga-cho-lung-va-co-thang-wheyshop-vn-4_compressed_zdnhqr.jpg" style="height:600px; width:600px" type="image" /></p>

                                <p>B&agrave;i tập n&agrave;y kh&aacute; kh&oacute; đối với ban đầu mới tập nhưng khi đ&atilde; th&agrave;nh thạo, n&oacute; lại l&agrave; một b&agrave;i tập gi&uacute;p bạn gi&atilde;n cơ v&agrave; thẳng lưng rất tốt.&nbsp;</p>

                                <p>C&aacute;ch tập của b&agrave;i tập n&agrave;y kh&aacute; đơn giản, bạn chỉ cần đưa hai tay ra ph&iacute;a sau lưng, hai b&agrave;n tay chắp lại, chạm to&agrave;n bộ ng&oacute;n tay v&agrave; cả b&agrave;n tay v&agrave;o nhau, hai cẳng tay hợp th&agrave;nh một đường thẳng v&agrave; giữ ở tư thế n&agrave;y trong 10 gi&acirc;y.</p>

                                <h2>B&agrave;i tập kh&oacute;a tay&nbsp;</h2>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589179267/bai-tap-yoga-cho-lung-va-co-thang-wheyshop-vn-1_compressed_nksmyh.jpg" style="height:458px; width:650px" type="image" /></p>

                                <p>B&agrave;i tập n&agrave;y gi&uacute;p lưng v&agrave; cổ của bạn thẳng kh&aacute; đều nhau, hơn nữa c&ograve;n hỗ trợ cho việc giảm mỡ tay sau rất tốt. Bạn chỉ cần đưa 1 tay ra sau lưng, đưa tay c&ograve;n lại l&ecirc;n sau đ&oacute; m&oacute;c ng&oacute;n tay n&agrave;y v&agrave; ng&oacute;n tay kia ở ph&iacute;a sau lưng. Giữ trong 5 gi&acirc;y v&agrave; đổi tay.</p>

                                <h2>B&agrave;i tập vặn m&igrave;nh&nbsp;</h2>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589179341/bai-tap-yoga-cho-lung-va-co-thang-wheyshop-vn-2_compressed-768x511_tnp7gm.jpg" style="height:426px; width:640px" type="image" /></p>

                                <p>B&agrave;i tập n&agrave;y qu&aacute; quen thuộc chắc ai cũng biết, bạn c&oacute; thể ngồi tại chỗ vặn m&igrave;nh cũng được hoặc đứng dậy.&nbsp;</p>

                                <p>C&aacute;ch thực hiện như sau: Ngồi hoặc đứng thẳng người, hai tay v&ograve;ng ra sau đầu, sau đ&oacute; vặn m&igrave;nh sang b&ecirc;n tr&aacute;i, giữ trong 5 gi&acirc;y sau đ&oacute; đổi b&ecirc;n.&nbsp;</p>

                                <h2>B&agrave;i tập ưỡn lưng</h2>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589179390/bai-tap-yoga-cho-lung-va-co-thang-wheyshop-vn-5_compressed_gaoq2l.jpg" style="height:360px; width:640px" type="image" /></p>

                                <p>B&agrave;i tập n&agrave;y gi&uacute;p bạn gi&atilde;n cơ lưng rất tốt, n&oacute; c&ograve;n c&oacute; t&aacute;c dụng l&agrave;m giảm t&igrave;nh trạng đau nhức lưng dưới nữa.&nbsp;</p>

                                <p>Để thực hiện b&agrave;i tập n&agrave;y, bạn cần l&agrave;m như sau:&nbsp;</p>

                                <p>- Ngồi ra ph&iacute;a m&eacute;p ngo&agrave;i của ghế v&agrave; cho tay ra sau đầu&nbsp;</p>

                                <p>- Ưỡn cột sống mắt nh&igrave;n l&ecirc;n trần nh&agrave;&nbsp;</p>

                                <p>- Từ từ k&eacute;o đầu về ph&iacute;a sau, mắt vẫn nh&igrave;n l&ecirc;n trần nh&agrave; cho đến khi bạn chạm v&agrave;o mặt sau của ghế&nbsp;</p>

                                <h2>B&agrave;i tập đứng chạm tường</h2>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589179441/bai-tap-yoga-cho-lung-va-co-thang-wheyshop-vn_compressed-768x768_gb0nbr.jpg" style="height:600px; width:600px" type="image" /></p>

                                <p>Đ&acirc;y c&aacute;ch l&agrave; một c&aacute;ch thử nghiệm để bạn c&oacute; thể biết được m&igrave;nh c&oacute; bị g&ugrave; lưng hay kh&ocirc;ng. C&aacute;ch thực hiện rất đơn giản, bạn đứng dựa lưng v&agrave;o tường, phải đảm bảo rằng đầu, bả vai, m&ocirc;ng v&agrave; bắp ch&acirc;n chạm v&agrave;o tường, h&iacute;t thở thật s&acirc;u v&agrave; nhớ ch&uacute; &yacute; thả lỏng cơ thể.&nbsp;</p>

                                <h2>B&agrave;i tập đứng nghi&ecirc;ng người&nbsp;</h2>

                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589179516/bai-tap-yoga-cho-lung-va-co-thang-wheyshop-vn-3_compressed-768x576_jzowu3.jpg" style="height:480px; width:640px" type="image" />B&agrave;i tập n&agrave;y tiếp tục từ tư thế b&agrave;i trước, bạn dang tay ra hai b&ecirc;n v&agrave; từ từ nghi&ecirc;ng người về ph&iacute;a trước, kh&ocirc;ng cần phải c&uacute;i đầu. Sau khi nghi&ecirc;ng giữ tư thế khoảng 10 gi&acirc;y.</p>

                                <p>Tr&ecirc;n đ&acirc;y l&agrave; 6 b&agrave;i tập yoga cho lưng v&agrave; cổ thẳng m&agrave; bạn c&oacute; thể tập ngay tại chỗ, tuy nhi&ecirc;n bạn n&ecirc;n kết hợp th&ecirc;m với những chế độ vận động thể thao ngo&agrave;i trời v&agrave; dinh dưỡng l&agrave;nh mạnh để cả thể l&uacute;c n&agrave;o cũng tr&agrave;n đ&acirc;y năng lượng v&agrave; khỏe mạnh nh&eacute;.</p>
',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589180020/phong-tap-yoga-uy-tin-hcm-696x455_mxzd2d.jpg',
                'hot' => '1',
                'category_news_id' => '2',
                'views' => '7',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '8',
                'title' => 'Những bài tập cơ lưng cho nữ giảm mỡ lưng tại nhà',
                'summary' => 'Con gái thì đa phần phải ngực nở, eo thon, thắt đáy lưng ong. Lưng béo, ngấn mỡ sẽ làm bạn thiếu đi tự tin [...]',
                'content' => '<p><strong>Con g&aacute;i th&igrave; đa phần phải ngực nở, eo thon, thắt đ&aacute;y lưng ong. Lưng b&eacute;o, ngấn mỡ sẽ l&agrave;m bạn thiếu đi tự tin khi diện c&aacute;c bộ v&aacute;y body hay bikini. H&atilde;y c&ugrave;ng Dinh Dưỡng Thể H&igrave;nh t&igrave;m hiểu ngay những b&agrave;i tập lưng cho nữ gi&uacute;p giảm mỡ lưng tại nh&agrave; ngay nh&eacute;.&nbsp;</strong></p>

                                            <p>Mọi chị em đều lu&ocirc;n muốn diện những bộ v&aacute;y &ocirc;m body ki&ecirc;u sa để khoe v&ugrave;ng eo thon gọn, cuốn h&uacute;t mọi &aacute;nh nh&igrave;n của nam giới. Tuy nhi&ecirc;n, với v&ugrave;ng lưng nhiều mỡ th&igrave; lại l&agrave; một cơn &aacute;c mộng thậm ch&iacute; cả với những người nổi tiếng. Do đ&oacute; việc luyện tập giảm mỡ lưng l&agrave; cần thiết để c&oacute; thể gi&uacute;p c&aacute;c chị em tự tin hơn. Ngay sau đ&acirc;y h&atilde;y c&ugrave;ng t&igrave;m hiểu qua 5 b&agrave;i tập gi&uacute;p giảm mỡ lưng cho nữ.&nbsp;</p>

                                            <h2>B&agrave;i tập biến thể b&ograve; m&egrave;o&nbsp;</h2>

                                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589180360/bai-tap-lung-cho-nu-giup-giam-mo-lung-wheyshop-vn_compressed-768x768_tu1xd7.jpg" style="width: 680px; height: 680px;" type="image" /></p>

                                            <p>C&aacute;ch động t&aacute;c trong b&agrave;i tập n&agrave;y sẽ gi&uacute;p phần cơ lưng của bạn được k&eacute;o gi&atilde;n tối đa, gi&uacute;p giảm mỡ thừa v&ugrave;ng lưng hiệu quả. Tuy nhi&ecirc;n, nếu bạn c&oacute; c&aacute;c vấn đề bệnh l&yacute; về xương khớp th&igrave; bạn n&ecirc;n tham khảo &yacute; kiến b&aacute;c sĩ trước khi tập b&agrave;i tập n&agrave;y.</p>

                                            <p>Tư thế thứ nhất : Tạo tư thế 4 ch&acirc;n ( hai tay v&agrave; hai đầu gối duỗi thẳng), n&acirc;ng đầu l&ecirc;n, uốn cong lưng xuống&nbsp;</p>

                                            <p>Tư thế thứ 2: Khi n&agrave;y bạn thở ra, k&eacute;o xương cụt v&agrave;o, căng cơ bụng, k&eacute;o cơ lưng, đầu hướng xuống dưới.&nbsp;</p>

                                            <p>Tư thế cuối c&ugrave;ng: Ngồi tr&ecirc;n hai bắp ch&acirc;n, ngực &aacute;p s&aacute;t v&agrave;o đ&ugrave;i, tr&aacute;n tựa xuống s&agrave;n v&agrave; duỗi hai tay qua đầu, rộng hơn vai v&agrave; giữ trong tư thế đ&oacute; khoảng 10 gi&acirc;y</p>

                                            <p>Lặp lại c&aacute;c động t&aacute;c từ 4 &ndash; 6 lần&nbsp;</p>

                                            <h2>B&agrave;i tập Glute Bridge&nbsp;</h2>

                                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589180255/bai-tap-lung-cho-nu-giup-giam-mo-lung-wheyshop-vn-1-768x480_aktg1u.jpg" style="width: 650px; height: 406px;" type="image" /></p>

                                            <p>B&agrave;i tập n&agrave;y l&agrave; b&agrave;i tập tổng hợp t&aacute;c động l&ecirc;n nhiều nh&oacute;m cơ c&ugrave;ng l&uacute;c với nh&oacute;m cơ ch&iacute;nh l&agrave; lưng, ngo&agrave;i ra n&oacute; cũng l&agrave; b&agrave;i tập rất tốt gi&uacute;p bắp ch&acirc;n thon gọn hơn nữa.&nbsp;</p>

                                            <p>Sau đ&acirc;y l&agrave; c&aacute;ch thực hiện b&agrave;i tập&nbsp;</p>

                                            <p>- Nằm ngửa tr&ecirc;n s&agrave;n, chống hai ch&acirc;n l&ecirc;n s&agrave;n, đầu gối gập lại sao cho gần m&ocirc;ng của bạn</p>

                                            <p>- Gồng phần cơ bụng v&agrave; n&acirc;ng m&ocirc;ng l&ecirc;n khỏi mặt đất sao cho phần đ&ugrave;i v&agrave; th&acirc;n tr&ecirc;n tạo với nhau th&agrave;nh 1 đường thẳng đồng thời di chuyển hai ch&acirc;n th&agrave;nh hướng ch&eacute;o sao cho tạo th&agrave;nh h&igrave;nh chữ V</p>

                                            <p>- Trở về vị tr&iacute; ban đầu, lặp lại từ 6 &ndash; 8 lần v&agrave; tập trong 4 hiệp</p>

                                            <h2>B&agrave;i tập duỗi ch&acirc;n&nbsp;</h2>

                                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589180280/bai-tap-lung-cho-nu-giup-giam-mo-lung-wheyshop-vn-3_compressed_hyr4ox.jpg" style="width: 600px; height: 600px;" type="image" /></p>

                                            <p>B&agrave;i tập n&agrave;y gi&uacute;p k&eacute;o căng phần cơ lưng, đ&ugrave;i sau v&agrave; m&ocirc;ng, gi&uacute;p bạn giảm mỡ gần như to&agrave;n diện phần dưới.&nbsp;</p>

                                            <p>Thực hiện như sau:&nbsp;</p>

                                            <p>- Nằm ngửa tr&ecirc;n thảm tập, hai ch&acirc;n đặt l&ecirc;n s&agrave;n</p>

                                            <p>- &Ocirc;m gối tr&aacute;i v&agrave;o ngực, sau đ&oacute; duỗi thẳng ch&acirc;n tr&aacute;i qua h&ocirc;ng&nbsp;</p>

                                            <p>- Duỗi thẳng ch&acirc;n l&ecirc;n sau đ&oacute; xoay tr&ograve;n mắt c&aacute; ch&acirc;n 4 lần theo từng hướng kh&aacute;c nhau&nbsp;</p>

                                            <p>- &Ocirc;m gối v&agrave;o, hạ thấp ch&acirc;n về vị tr&iacute; ban đầu, lặp lại tương tự với ch&acirc;n c&ograve;n lại&nbsp;</p>

                                            <h2>B&agrave;i tập con bướm&nbsp;</h2>

                                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589180306/bai-tap-lung-cho-nu-giup-giam-mo-lung-wheyshop-vn-2_compressed_qmoj29.jpg" style="width: 600px; height: 600px;" type="image" /></p>

                                            <p>B&agrave;i tập n&agrave;y t&aacute;c động đến phần cơ m&ocirc;ng, cơ đ&ugrave;i trong v&agrave; cơ lưng gi&uacute;p bạn c&oacute; một v&ograve;ng eo thon thả, c&ugrave;ng v&ograve;ng 3 v&ocirc; c&ugrave;ng quyến rũ.&nbsp;</p>

                                            <p>B&agrave;i tập như sau:&nbsp;</p>

                                            <p>- Nằm ngửa tr&ecirc;n thảm tập, hai g&oacute;t ch&acirc;n để s&aacute;t v&agrave;o nhau mở gối sang hai b&ecirc;n</p>

                                            <p>- &Eacute;p chặt hai đ&ugrave;i v&agrave;o nhau&nbsp;</p>

                                            <p>- Thực hiện lặp lại từ 6 &ndash; 8 lần trong 3 hiệp&nbsp;</p>

                                            <h2>B&agrave;i tập ch&acirc;n rắn</h2>

                                            <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589180331/bai-tap-lung-cho-nu-giup-giam-mo-lung-wheyshop-vn-4_compressed_qtninr.jpg" style="width: 600px; height: 600px;" type="image" /></p>

                                            <p>B&agrave;i tập n&agrave;y t&aacute;c động v&agrave;o phần cơ lưng v&agrave; m&ocirc;ng, đ&acirc;y l&agrave; một dạng b&agrave;i yoga thư gi&atilde;n gi&uacute;p bạn hạn chế việc đau lưng rất tốt, n&oacute; cũng gi&uacute;p giảm mỡ thừa v&ugrave;ng lưng nữa đ&oacute;.&nbsp;</p>

                                            <p>B&agrave;i tập thực hiện như sau:&nbsp;</p>

                                            <p>- Nằm &uacute;p tr&ecirc;n thảm tập với hai c&ugrave;i trỏ chống hai b&ecirc;n, hai tay &uacute;p xuống thảm&nbsp;</p>

                                            <p>- Tựa đầu tr&ecirc;n s&agrave;n v&agrave; hơi gập cằm xuống&nbsp;</p>

                                            <p>- H&iacute;t v&agrave;o sau đ&oacute; n&acirc;ng ngực l&ecirc;n c&ugrave;ng với cơ lưng</p>

                                            <p>- Đồng thời n&acirc;ng ch&acirc;n phải c&agrave;ng cao c&agrave;ng tốt, giữ trong v&ograve;ng v&agrave;i gi&acirc;y&nbsp;</p>

                                            <p>- Đổi b&ecirc;n c&ograve;n lại v&agrave; lặp lại 6 lần với mỗi ch&acirc;n&nbsp;</p>

                                            <p>Qua b&agrave;i viết tr&ecirc;n, <em><strong>Gymer Store</strong></em>&nbsp;đ&atilde; gi&uacute;p bạn t&igrave;m hiểu được 5 b&agrave;i tập lưng cho nữ gi&uacute;p giảm mỡ lưng ngay tại nh&agrave; rồi đ&oacute;. H&atilde;y cho ngay những b&agrave;i tập n&agrave;y v&agrave;o lịch tập của bạn để c&oacute; một v&ograve;ng eo thon v&agrave; thắt đ&aacute;y lưng ong nh&eacute;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589180728/gap-nguoi-phia-truoc-tap-lung_pvnkpf.jpg',
                'hot' => '1',
                'category_news_id' => '2',
                'views' => '12',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '9',
                'title' => 'Chế độ ăn Eat Clean giảm cân là gì ? Thực đơn Eat Clean tăng cơ giảm mỡ hiệu quả trong 7 ngày. ',
                'summary' => 'Eat Clean là một khái niệm hiện nay đã không còn xa lạ, hầu hết mọi người hiện nay đều coi việc ăn Eat Clean [...]',
                'content' => '<h2><strong>Chế độ ăn Eat Clean giảm c&acirc;n l&agrave; g&igrave; ? Thực đơn Eat Clean tăng cơ giảm mỡ , giảm c&acirc;n cấp tốc 7 ng&agrave;y&nbsp;</strong></h2>

                                <p>Eat Clean l&agrave; một kh&aacute;i niệm hiện nay đ&atilde; kh&ocirc;ng c&ograve;n xa lạ, hầu hết mọi người hiện nay đều coi việc ăn Eat Clean l&agrave; một phương ph&aacute;p được sử dụng để c&oacute; thể giảm c&acirc;n giảm mỡ hiệu quả. Vậy&nbsp;<strong>Eat Clean</strong>&nbsp;giảm c&acirc;n l&agrave; g&igrave;? Liệu n&oacute; c&oacute; thật sự giảm c&acirc;n hay kh&ocirc;ng?.</p>

                                <p>Kh&ocirc;ng để c&aacute;c bạn phải đợi l&acirc;u nữa, h&atilde;y c&ugrave;ng Dinh Dưỡng Thể H&igrave;nh t&igrave;m hiểu ngay Eat Clean giảm c&acirc;n l&agrave; g&igrave;? Thực đơn Eat Clean tăng cơ giảm mỡ hiệu quả trong 7 ng&agrave;y gi&uacute;p bạn giảm c&acirc;n tốt nhất nh&eacute;.&nbsp;</p>

                                <h3><strong>Chế độ ăn Eat Clean giảm c&acirc;n l&agrave; g&igrave; ?</strong></h3>

                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589202612/eat-clean-giam-can-la-gi-wheyshop-vn-1_compressed_zk0ues.jpg" style="width: 650px; height: 384px;" type="image" /></strong></p>

                                <p>Eat Clean hay c&ograve;n được biết hiểu theo đ&uacute;ng nghĩa đen của từ c&oacute; nghĩa l&agrave; ăn sạch, bởi quả thực chế độ ăn n&agrave;y rất đơn giản. Để hiểu một c&aacute;ch đơn giản nhất, th&igrave; Eat Clean nghĩa l&agrave; bạn sẽ ăn sẽ sử dụng c&aacute;c thực phẩm tự nhi&ecirc;n nhưng giữ ở trạng th&aacute;i nguy&ecirc;n thủy nhất, kh&ocirc;ng trải qua tinh chế hay tẩm ướp gia vị sẵn c&oacute;.&nbsp;</p>

                                <p>Eat Clean n&oacute;i chung l&agrave; một phương thức ăn uống l&agrave;nh mạnh, tốt cho sức khỏe, bởi thay v&igrave; việc tập trung v&agrave;o một vấn đề cụ thể như tăng&nbsp;<a href="https://wheyshop.vn/category/whey-protein-html" target="_blank">Protein</a>, giảm calories hay giảm tinh bột, th&igrave; chế độ Eat Clean sẽ l&agrave; c&acirc;n bằng dinh dưỡng một c&aacute;ch khoa học nhất để cơ thể lu&ocirc;n trong trạng th&aacute;i khỏe mạnh.&nbsp;</p>

                                <p>Vậy chế độ ăn Eat Clean giảm c&acirc;n l&agrave; g&igrave;? Theo c&aacute;c chuy&ecirc;n gia về dinh dưỡng th&igrave; Eat Clean kh&ocirc;ng hẳn l&agrave; một phương ph&aacute;p ăn ki&ecirc;ng, m&agrave; chủ yếu n&oacute; hướng tới sự thanh đạm nhiều hơn. Như vậy, phương ph&aacute;p ăn Eat Clean đều ưu ti&ecirc;n lựa chọn c&aacute;c thực phẩm tự nhi&ecirc;n như c&aacute;c loại gạo nguy&ecirc;n c&aacute;m, gạo lứt, yến mạch, thực phẩm &iacute;t qua chế biến&hellip; V&agrave; hạn chế tối đa c&aacute;c thực phẩm chế biến sẵn, thực phẩm đ&oacute;ng hộp v&agrave; c&aacute;c chất b&eacute;o kh&ocirc;ng l&agrave;nh mạnh.&nbsp;</p>

                                <p>Nhờ v&agrave;o những yếu tố tr&ecirc;n, cơ thể của bạn sẽ lu&ocirc;n lu&ocirc;n được cung cấp năng lượng đầy đủ, nhưng lại được loại bỏ ho&agrave;n to&agrave;n c&aacute;c lượng độc tố tạp chất v&agrave; chất b&eacute;o kh&ocirc;ng cần thiết, gi&uacute;p cơ thể được thanh lọc tối đa v&agrave; cắt giảm được kha kh&aacute; lượng calo dư thừa. Từ đ&oacute; bảo vệ sức khỏe bạn tốt hơn v&agrave; hỗ trợ giảm mỡ thừa, giảm c&acirc;n như mong muốn.&nbsp;</p>

                                <h3><strong>Thực đơn Eat Clean tăng cơ giảm mỡ , giảm c&acirc;n cấp tốc 7 ng&agrave;y</strong></h3>

                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589202660/eat-clean-giam-can-la-gi-wheyshop-vn-2_compressed_yzcydc.jpg" style="width: 650px; height: 325px;" type="image" /></strong></p>

                                <p>Eat Clean l&agrave; v&ocirc; c&ugrave;ng dễ d&agrave;ng, tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng c&oacute; thể sắp xếp được c&aacute;c bữa ăn l&agrave;m sao cho đẹp mắt, ngon v&agrave; vẫn bổ sung đầy đủ h&agrave;m lượng dinh dưỡng cần thiết th&igrave; quả thực rất kh&oacute;. Bởi nếu chỉ ăn uống đơn giản th&igrave; sẽ khiến bạn dễ ngấy v&agrave; bỏ cuộc sớm.&nbsp;</p>

                                <p>Nếu bạn vẫn đang băn khoăn chưa biết n&ecirc;n lựa chọn thực đơn ra sao, th&igrave; h&atilde;y tham khảo ngay thực đơn Eat Clean tăng cơ giảm mỡ, giảm c&acirc;n cấp tốc 7 ng&agrave;y ngay sau đ&acirc;y để đỡ phải suy nghĩ nhiều nữa nh&eacute;.&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ nhất:&nbsp;</strong></p>

                                <p>- Bữa s&aacute;ng: 1 củ khoai lang nhỏ, 200g thịt ( b&ograve; hoặc g&agrave; &aacute;p chảo), 1 đĩa salad hoặc tr&aacute;i c&acirc;y&nbsp;</p>

                                <p>- Bữa phụ s&aacute;ng: Ăn nhẹ 1 ch&eacute;n nhỏ c&aacute;c loại hạt hoặc quả mọng</p>

                                <p>- Bữa trưa: 1 ch&eacute;n cơm gạo lứt, 1 đĩa rau củ luộc, 200g ức g&agrave;&nbsp;</p>

                                <p>- Bữa phụ chiều: 1 hộp sữa chua, &iacute;t hoa quả v&agrave; quả trứng luộc</p>

                                <p>- Bữa tối: 1 củ khoai lang, 300g thịt g&agrave;, rau xanh&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ hai:&nbsp;</strong></p>

                                <p>- Bữa s&aacute;ng: 2 l&aacute;t b&aacute;nh m&igrave; đen, 2 quả trứng luộc, 1 đĩa salad&nbsp;</p>

                                <p>- Bữa phụ s&aacute;ng: 1 ly sữa, 1 quả chuối&nbsp;</p>

                                <p>- Bữa trưa: 300g thịt nạc, 1 ch&eacute;n cơm gạo lứt, rau củ luộc&nbsp;</p>

                                <p>- Bữa trước tập: 2 l&aacute;t b&aacute;nh m&igrave; đen, 1 quả trứng luộc, một t&iacute; tr&aacute;i c&acirc;y&nbsp;</p>

                                <p>- Bữa sau tập: B&aacute;nh m&igrave;, 100g thịt b&ograve; hoặc 1 muỗng<a href="https://wheyshop.vn/category/whey-protein-html" target="_blank" title=" Whey">&nbsp;Whey</a>&nbsp;Protein</p>

                                <p>- Bữa tối: Cơm, 200g thịt nạc, rau xanh, tr&aacute;i c&acirc;y.&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ ba:&nbsp;</strong></p>

                                <p>- Bữa s&aacute;ng: B&uacute;n hoặc phở v&agrave; 1 ly sữa kh&ocirc;ng đường&nbsp;</p>

                                <p>- Bữa phụ s&aacute;ng: 1 cốc cafe hoặc 1 ch&eacute;n c&aacute;c loại hạt&nbsp;</p>

                                <p>- Bữa trưa: Ăn trưa b&igrave;nh thường, giảm lượng cơm trắng hoặc thay bằng gạo lứt.</p>

                                <p>- Bữa phụ chiều: 100g Khoai luộc, 200g c&aacute; ngừ hoặc c&aacute; thu&nbsp;</p>

                                <p>- Bữa tối: Khoai luộc, 3 quả trứng g&agrave; luộc, rau xanh.&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ tư:&nbsp;</strong></p>

                                <p>- Bữa s&aacute;ng: B&uacute;n phở v&agrave; 1 ly sữa</p>

                                <p>- Ăn nhẹ bữa s&aacute;ng: C&aacute;c loại hạt hoặc quả mọng.&nbsp;</p>

                                <p>- Bữa trưa: Ăn trưa như b&igrave;nh thường, giảm lượng cơm.&nbsp;</p>

                                <p>- Bữa trước tập: Tr&aacute;i c&acirc;y v&agrave; ức g&agrave; luộc</p>

                                <p>Bữa tối: 200g Khoai luộc, 5 quả trứng g&agrave; luộc.&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ năm:&nbsp;</strong></p>

                                <p>- S&aacute;ng 2 quả trứng, 2 l&aacute;t b&aacute;nh m&igrave; đen, 1 ly sinh tốt</p>

                                <p>- Bữa phụ s&aacute;ng: 1 hộp sữa chua , &iacute;t hoa quả&nbsp;</p>

                                <p>- Bữa trưa: 200g ức g&agrave; nướng, b&iacute; đỏ, rau salad&nbsp;</p>

                                <p>- Tối: Salad C&aacute; ngừ&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ s&aacute;u:&nbsp;</strong></p>

                                <p>- Bữa s&aacute;ng: 2 miếng b&aacute;nh m&igrave; đen, 2 quả trứng luộc, 1 quả t&aacute;o&nbsp;</p>

                                <p>- Bữa phụ s&aacute;ng: 1 ly sinh tố hoa quả&nbsp;</p>

                                <p>- Bữa trưa: Nui x&agrave;o ( 250g b&ograve; vi&ecirc;n, sốt c&agrave; chua, cải b&oacute; x&ocirc;i)&nbsp;</p>

                                <p>- Tối: Salad c&aacute; hồi hun kh&oacute;i.&nbsp;</p>

                                <p><strong>Ng&agrave;y thứ 7:</strong></p>

                                <p>- Bữa s&aacute;ng: Yến mạch, 2 quả trứng, thịt heo muối xong kh&oacute;i&nbsp;</p>

                                <p>- Bữa phụ s&aacute;ng: 1 ly sinh tố Whey Protein&nbsp;</p>

                                <p>- Bữa trưa: C&aacute;c ngừ, cải b&oacute; x&ocirc;i, 1 ch&eacute;n yến mạch&nbsp;</p>

                                <p>- Bữa tối: 150g b&iacute; đỏ, 200g ức g&agrave;, 100g ớt chu&ocirc;ng.</p>

                                <p>Tr&ecirc;n đ&acirc;y ch&iacute;nh l&agrave; thực đơn Eat Clean giảm c&acirc;n giảm mỡ thừa cho bạn tham khảo, lưu &yacute; rằng&nbsp; đ&acirc;y chỉ l&agrave; thực đơn mẫu, do đ&oacute; bạn cần phải điều chỉnh h&agrave;m lượng calo sao cho hợp l&yacute; nhất nh&eacute;.&nbsp;</p>

                                <h3><strong>Chế độ Ăn Eat Clean c&oacute; tăng c&acirc;n kh&ocirc;ng ?</strong></h3>

                                <p>Hầu hết mọi người đều nghĩ rằng Eat Clean l&agrave; chế độ ăn ki&ecirc;ng giảm mỡ thừa. Tuy nhi&ecirc;n điều n&agrave;y kh&ocirc;ng ho&agrave;n to&agrave;n đ&uacute;ng, bởi chế độ ăn Eat Clean vốn l&agrave; một chế độ ăn l&agrave;nh mạnh, c&acirc;n bằng dinh dưỡng ph&ugrave; hợp với bản th&acirc;n chứ kh&ocirc;ng phải chỉ l&agrave; giảm c&acirc;n.&nbsp;</p>

                                <p>Vậy chế độ ăn Eat Clean c&oacute; tăng c&acirc;n kh&ocirc;ng? C&acirc;u trả lời l&agrave; c&oacute;, h&atilde;y nhớ rằng để c&oacute; thể tăng c&acirc;n, bạn cần phải để h&agrave;m lượng calo nạp v&agrave;o nhiều hơn so với h&agrave;m lượng calo ti&ecirc;u thụ th&igrave; như vậy c&oacute; thể tăng c&acirc;n hiệu quả.&nbsp;</p>

                                <p>&Aacute;p dụng điều đ&oacute; v&agrave;o chế độ ăn Eat Clean, đơn giản bạn chỉ cần đo h&agrave;m lượng calo trong ng&agrave;y v&agrave; ăn dư thừa nhiều calo hơn l&agrave; ho&agrave;n to&agrave;n c&oacute; thể tăng c&acirc;n một c&aacute;ch hiệu quả. Tuy nhi&ecirc;n, bạn cũng cần lưu &yacute; một điều, để c&oacute; thể tăng c&acirc;n trong chế độ ăn Eat Clean th&igrave; bạn n&ecirc;n chia th&agrave;nh nhiều bữa ăn trong ng&agrave;y, vừa để đỡ g&acirc;y qu&aacute; tải cho dạ d&agrave;y v&agrave; vừa gi&uacute;p cơ thể hấp thu tốt hơn.&nbsp;</p>

                                <p>Việc tăng c&acirc;n bằng phương ph&aacute;p ăn uống n&agrave;y kh&ocirc;ng những rất tốt cho sức khỏe, m&agrave; vẫn đảm bảo được nguồn dinh dưỡng sạch cho cơ thể, gi&uacute;p bạn tăng cường trao đổi chất v&agrave; kh&ocirc;ng lo tụt c&acirc;n v&agrave;o những thời gian sau n&agrave;y.&nbsp;</p>

                                <h3><strong>Chế độ Ăn Eat Clean c&oacute; tốt kh&ocirc;ng ?</strong></h3>

                                <p>Rất nhiều người thường c&oacute; c&acirc;u hỏi liệu chế độ ăn Eat Clean c&oacute; tốt kh&ocirc;ng? C&acirc;u trả lời l&agrave; c&oacute;, nhưng đ&oacute; l&agrave; khi bạn &aacute;p dụng đ&uacute;ng c&aacute;ch m&agrave; th&ocirc;i. Rất nhiều người v&igrave; muốn giảm c&acirc;n nhanh ch&oacute;ng n&ecirc;n thường &aacute;p dụng sai phương ph&aacute;p.</p>

                                <p>Điển h&igrave;nh như việc ăn chỉ to&agrave;n rau, kh&ocirc;ng hề ăn chất b&eacute;o v&igrave; cho rằng Eat Clean l&agrave; chế độ ăn ki&ecirc;ng chỉ ăn rau v&agrave; việc nạp th&ecirc;m chất b&eacute;o sẽ khiến cơ thể t&iacute;ch tụ mỡ thừa. Tuy nhi&ecirc;n điều n&agrave;y l&agrave; kh&ocirc;ng đ&uacute;ng, bởi việc c&acirc;n bằng dinh dưỡng l&agrave; rất quan trọng. Chất b&eacute;o kh&ocirc;ng chỉ cung cấp năng lượng cho cơ thể m&agrave; c&ograve;n đ&oacute;ng vai tr&ograve; rất quan trọng đối với c&aacute;c hoạt động cơ thể.&nbsp;</p>

                                <p>Loại bỏ ho&agrave;n to&agrave;n đồ ngọt cũng l&agrave; một trong những phương &aacute;n thường được những người giảm c&acirc;n nhanh sử dụng. Tuy nhi&ecirc;n việc n&agrave;y sẽ g&acirc;y hại về sau bởi việc loại bỏ ho&agrave;n to&agrave;n c&aacute;c đồ ngọt trong một khoảng thời gian l&acirc;u d&agrave;i sẽ khiến cơ thể bạn giảm trao đổi chất. Hơn nữa, bạn cũng đ&atilde; bỏ qua c&aacute;c chất ngọt tự nhi&ecirc;n tốt cho sức khỏe như mật ong hay đường thốt nốt rồi đ&oacute;.&nbsp;</p>

                                <h3><strong>Chế độ Ăn Eat Clean l&agrave; như thế n&agrave;o?</strong></h3>

                                <p>Như đ&atilde; n&oacute;i ở phần đầu, chế độ ăn Eat Clean l&agrave; chế độ ăn sạch theo đ&uacute;ng nghĩa đen, bạn sẽ tu&acirc;n thủ theo c&aacute;c nguy&ecirc;n tắc ăn uống như: Ưu ti&ecirc;n tối đa cho c&aacute;c thực phẩm tự nhi&ecirc;n, nguy&ecirc;n thủy nhất như c&aacute;c loại gạo nguy&ecirc;n c&aacute;m, thức ăn tự nhi&ecirc;n chưa qua xử l&yacute; v&agrave; đảm bảo c&aacute;c yếu tố như:&nbsp;</p>

                                <p>- Cắt giảm v&agrave; loại bỏ dần c&aacute;c chế độ ăn Eat Clean trong ng&agrave;y&nbsp;</p>

                                <p>- Đảm bảo cung cấp đầy đủ th&agrave;nh phần Protein trong ng&agrave;y.&nbsp;</p>

                                <p>- Cắt giảm c&aacute;c thực phẩm chứa nhiều chất b&eacute;o, đường, muối&hellip;</p>

                                <p>- N&ecirc;n chia nhỏ bữa ăn th&agrave;nh 5 &ndash; 6 bữa ăn trong ng&agrave;y để kh&ocirc;ng lo đ&oacute;i bụng&nbsp;</p>

                                <p>- Đảm bảo uống đủ nước mỗi ng&agrave;y t&ugrave;y theo c&acirc;n nặng cơ thể.&nbsp;</p>

                                <p>- Tập luyện thể dục thường xuy&ecirc;n cho cơ thể khỏe mạnh.</p>

                                <p>Chế độ ăn Eat Clean kh&ocirc;ng những l&agrave; một phương ph&aacute;p ăn uống l&agrave;nh mạnh, gi&uacute;p cải thiện v&oacute;c d&aacute;ng, l&agrave;n da khỏe mạnh một c&aacute;ch hiệu quả. Nhưng cũng như c&aacute;c phương ph&aacute;p kh&aacute;c, bạn cần phải ki&ecirc;n tr&igrave; v&agrave; kh&ocirc;ng n&ecirc;n qu&aacute; vội v&atilde; giảm c&acirc;n. Vậy l&agrave; bạn đ&atilde; hiểu chế độ ăn Eat Clean l&agrave; như thế n&agrave;o rồi đ&uacute;ng kh&ocirc;ng n&agrave;o?.</p>

                                <p>Như vậy, Gymer Store đ&atilde; gi&uacute;p bạn t&igrave;m hiểu<strong>&nbsp;Eat Clean</strong>&nbsp;giảm c&acirc;n l&agrave; g&igrave; v&agrave; cung cấp cho bạn thực đơn hỗ trợ giảm c&acirc;n nhanh ch&oacute;ng trong v&ograve;ng 7 ng&agrave;y rồi đ&oacute;. H&atilde;y tu&acirc;n thủ những quy tắc của chế độ ăn n&agrave;y để c&oacute; thể giảm c&acirc;n giảm mỡ một c&aacute;ch tự nhi&ecirc;n nhất c&oacute; thể nh&eacute;.&nbsp;</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589202936/giam-bot-nguy-co-mac-ung-thu-215029_n59xyr.jpg',
                'hot' => '1',
                'category_news_id' => '3',
                'views' => '12',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '10',
                'title' => 'Trước khi chạy bền nên ăn gì và làm gì tốt nhất',
                'summary' => 'Nếu bạn là một người chạy bộ và thực sự nghiêm túc muốn vượt qua bản thân trong những giải chạy bộ thì [...]',
                'content' => '<p>Nếu bạn l&agrave; một người chạy bộ v&agrave; thực sự nghi&ecirc;m t&uacute;c muốn vượt qua bản th&acirc;n trong những giải chạy bộ th&igrave; vấn đề bạn rất cần quan t&acirc;m l&uacute;c n&agrave;y ch&iacute;nh l&agrave; dinh dưỡng. Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng biết trước khi chạy bền n&ecirc;n ăn g&igrave; v&agrave; l&agrave;m g&igrave; để đảm bảo sức khỏe tốt nhất trong qu&aacute; tr&igrave;nh chạy bộ.&nbsp;</p>

                                <p>Vậy th&igrave; ngay sau đ&acirc;y, h&atilde;y để <em><strong>Gymer Store</strong></em>&nbsp;gi&uacute;p bạn t&igrave;m hiểu&nbsp;<strong>trước khi chạy bền n&ecirc;n ăn g&igrave;</strong>&nbsp;v&agrave; l&agrave;m g&igrave; tốt nhất để c&oacute; thể đảm bảo sức khỏe v&agrave; c&oacute; một thể trạng tốt nhất khi chạy bộ nh&eacute;.&nbsp;</p>

                                <h3><strong>Trước khi chạy bền n&ecirc;n ăn g&igrave; tốt nhất?</strong></h3>

                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203080/truoc-khi-chay-ben-nen-an-gi-wheyshop-vn-4_compressed_pqg3o5.jpg" style="height: 434px; width: 650px;" type="image" /></strong></p>

                                <p>Dinh dưỡng trong qu&aacute; tr&igrave;nh chạy l&agrave; v&ocirc; c&ugrave;ng quan trọng, bởi khi chạy bền, bạn phải lu&ocirc;n đảm bảo rằng m&igrave;nh c&oacute; đủ năng lượng để c&oacute; thể chạy tốt nhất v&agrave; ho&agrave;n th&agrave;nh chặng đua của m&igrave;nh. Hơn nữa, kh&ocirc;ng phải chỉ ăn đủ l&agrave; được m&agrave; bạn c&ograve;n cần ăn đ&uacute;ng loại thức ăn để tr&aacute;nh bị nặng bụng trong qu&aacute; tr&igrave;nh chạy nữa.&nbsp;</p>

                                <p><strong>Nguy&ecirc;n tắc ăn uống trước khi chạy&nbsp;</strong></p>

                                <p>Chạy bộ với một chiếc bụng đang đ&oacute;i chắc chắn l&agrave; điều m&agrave; bạn kh&ocirc;ng n&ecirc;n l&agrave;m. Bởi điều n&agrave;y kh&ocirc;ng chỉ khiến thể lực của bạn bị b&agrave;o m&ograve;n đi nhanh ch&oacute;ng, m&agrave; c&ograve;n khiến dạ d&agrave;y của bạn trở n&ecirc;n kh&oacute; chịu hơn, khiến bạn dễ d&agrave;ng đuối sức, mệt mỏi v&agrave; kh&ocirc;ng thể chạy bộ trong trạng th&aacute;i tốt nhất m&agrave; phải bỏ cuộc dở chừng.&nbsp;</p>

                                <p>Ngo&agrave;i ra, bạn cũng kh&ocirc;ng n&ecirc;n ăn qu&aacute; no trong v&ograve;ng 2 tiếng trước khi chạy, việc mang một chiếc bụng nặng nề đ tập chạy quả l&agrave; một điều kh&ocirc;ng tốt ch&uacute;t n&agrave;o. Hơn nữa, nếu bạn chạy với qu&atilde;ng đường d&agrave;i c&oacute; thể g&acirc;y ra c&aacute;c t&igrave;nh trạng bất lợi như n&ocirc;n mửa, dạ d&agrave;y kh&oacute; chịu.&nbsp;</p>

                                <p><strong>Vậy n&ecirc;n ăn g&igrave; trước khi chạy bền ?</strong></p>

                                <p>trước khi chạy bền n&ecirc;n ăn g&igrave; quả thực kh&ocirc;ng phải l&agrave; một vấn đề qu&aacute; kh&oacute;, bạn cũng n&ecirc;n lưu &yacute; rằng chạy bền ở đ&acirc;y c&oacute; nghĩa l&agrave; chạy từ 1 tiếng trở l&ecirc;n, chạy bền sẽ đ&ograve;i hỏi bạn phải c&oacute; nhiều sức lực hơn do vậy bữa ăn của bạn cũng cần nhiều chất dinh dưỡng hơn v&agrave; thời gian ti&ecirc;u h&oacute;a l&acirc;u hơn.&nbsp;</p>

                                <p>Như vậy, bạn n&ecirc;n hướng tới việc ăn c&aacute;c loại tinh bột hấp thu chậm để đảm bảo qu&aacute; tr&igrave;nh tiếp năng lượng được xuy&ecirc;n suốt. Bạn c&oacute; thể ăn chuối, yến mạch, b&aacute;nh m&igrave; với mật ong hay Granola&hellip;Lưu &yacute; một điều, đối với b&aacute;nh m&igrave; trắng v&agrave; chuối bạn c&oacute; thể ăn trước khi tập 15 ph&uacute;t để chuyển h&oacute;a th&agrave;nh năng lượng nhanh ch&oacute;ng.&nbsp;</p>

                                <p>Ngo&agrave;i ra, trước khi thi chạy cũng l&agrave; giai đoạn quan trọng m&agrave; bạn cần lưu &yacute;, v&agrave;o những ng&agrave;y trước khi thi đấu khoảng 2 tuần th&igrave; bạn tuyệt đối kh&ocirc;ng n&ecirc;n thử c&aacute;c m&oacute;n ăn lạ, bởi chỉ cần một lần bị ti&ecirc;u chảy trước thời gian thi đấu c&oacute; thể khiến thể lực của bạn bị giảm s&uacute;t đi rất nhiều.&nbsp;</p>

                                <p>Th&ocirc;ng thường, bạn n&ecirc;n bổ sung c&aacute;c loại thức ăn gi&agrave;u chất chống oxy h&oacute;a để tăng lưu lượng m&aacute;u được truyền đi đến cơ bắp v&agrave; tăng cường năng lượng. Bạn c&oacute; thể ăn th&ecirc;m c&aacute;c m&oacute;n như: b&aacute;nh m&igrave;, chuối, bơ lạc, yến mạch, sinh tố, ngũ cốc với tr&aacute;i c&acirc;y, b&aacute;nh m&igrave; nướng v.v&hellip;</p>

                                <p>Trong trường hợp bạn kh&ocirc;ng c&oacute; qu&aacute; nhiều thời gian để ăn uống, c&aacute;ch tốt nhất l&agrave; n&ecirc;n sử dụng c&aacute;c loại Gel năng lượng hoặc c&aacute;c thanh b&aacute;nh Protein Bar để bổ sung năng lượng một c&aacute;ch nhanh nhất v&agrave; hạn chế t&igrave;nh trạng phải ti&ecirc;u h&oacute;a qu&aacute; nhiều.&nbsp;</p>

                                <p><strong>Kh&ocirc;ng n&ecirc;n ăn g&igrave; trước khi chạy bền?</strong></p>

                                <p>Ngo&agrave;i việc trước khi chạy bền n&ecirc;n ăn g&igrave; th&igrave; bạn cũng cần lưu &yacute; đến những loại thức ăn kh&ocirc;ng n&ecirc;n ăn trước khi chạy bền sau:&nbsp;</p>

                                <p>- Chất b&eacute;o: Chất b&eacute;o sẽ cần tốn rất nhiều thời gian để c&oacute; thể ti&ecirc;u h&oacute;a hết, v&agrave; khi chưa thể ti&ecirc;u h&oacute;a được, n&oacute; sẽ nằm lại trong dạ d&agrave;y của bạn khiến dạ d&agrave;y bạn&nbsp; trở n&ecirc;n nặng nề hơn, do vậy kh&ocirc;ng n&ecirc;n sử dụng c&aacute;c loại thức ăn gi&agrave;u chất b&eacute;o trước khi chạy nh&eacute;.&nbsp;</p>

                                <p>- Chất xơ: chất xơ mặc d&ugrave; rất tốt, nhưng việc ăn qu&aacute; nhiều chất xơ dễ g&acirc;y k&iacute;ch th&iacute;ch ruột, c&oacute; khả năng khiến bạn phải tạm ngưng việc chạy bộ để t&igrave;m nơi &ldquo;giải quyết&rdquo;&nbsp;</p>

                                <p>- C&aacute;c m&oacute;n cay v&agrave; sữa: c&aacute;c m&oacute;n cay cũng c&oacute; khả năng k&iacute;ch th&iacute;ch đường ruột, c&ograve;n đối với sữa th&igrave; c&ograve;n t&ugrave;y thuộc, đối với những người dị ứng sữa th&igrave; chắc chắn kh&ocirc;ng n&ecirc;n sử dụng.</p>

                                <h3><strong>Sau khi chạy bền n&ecirc;n ăn g&igrave; ?</strong></h3>

                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203177/truoc-khi-chay-ben-nen-an-gi-wheyshop-vn-1_compressed_e4rjef.jpg" style="width: 650px; height: 350px;" type="image" /></strong></p>

                                <p>Bữa ăn trước khi chạy bền l&agrave; v&ocirc; c&ugrave;ng quan trọng, nhưng cũng v&igrave; vậy m&agrave; nhiều bạn thường cho rằng chỉ cần ho&agrave;n th&agrave;nh v&ograve;ng đua thế l&agrave; ổn, kh&ocirc;ng cần quan t&acirc;m sau đ&oacute; thế n&agrave;o. Tuy nhi&ecirc;n, điều n&agrave;y l&agrave; rất nguy hiểm, bởi ngay sau khi chạy l&agrave; khoảng thời gian m&agrave; cơ thể đang thiếu hụt năng lượng cũng như c&aacute;c chất muối kho&aacute;ng cần thiết cho cơ thể.&nbsp;</p>

                                <p>Nếu trong giai đoạn n&agrave;y, bạn kh&ocirc;ng bổ sung ngay nguồn năng lượng v&agrave; c&aacute;c chất cần thiết th&igrave; cơ thể sẽ rơi v&agrave;o trạng th&aacute;i mệt mỏi v&agrave; kh&ocirc;ng đủ sức để hoạt động. Hơn nữa c&oacute; thể khiến tốc độ phục hồi giảm đi v&agrave; bạn sẽ mất l&acirc;u thời gian hơn để trở lại tập luyện. Vậy sau khi chạy bền n&ecirc;n ăn g&igrave;? H&atilde;y lưu &yacute; ngay đến những yếu tố sau nh&eacute;:</p>

                                <p>- Protein l&agrave; yếu tố quan trọng v&agrave; kh&ocirc;ng thể thiếu m&agrave; bạn cần nạp ngay sau khi chạy, n&oacute; gi&uacute;p bạn phục hồi v&agrave; sửa chữa lại cơ bắp tốt hơn sau qu&aacute; tr&igrave;nh chạy d&agrave;i.&nbsp;</p>

                                <p>- Bổ sung nguồn năng lượng thiếu hụt cũng rất quan trọng, h&atilde;y ăn c&aacute;c loại Carb nhanh để b&ugrave; đắp năng lượng ngay l&uacute;c n&agrave;y.</p>

                                <p>- Uống đầy đủ nước v&agrave; bổ sung th&ecirc;m c&aacute;c chất điện giải cho cơ thể.&nbsp;</p>

                                <p>- Ngo&agrave;i ra, bạn c&oacute; thể nạp th&ecirc;m Omega &ndash; 3 để tăng khả năng chống vi&ecirc;m cơ.&nbsp;</p>

                                <p>Như vậy, ngo&agrave;i việc biết được trước khi chạy bền n&ecirc;n ăn g&igrave;, bạn cũng cần quan t&acirc;m đến việc phục hồi cơ thể ngay sau qu&aacute; tr&igrave;nh chạy bền v&agrave; thi đấu để c&oacute; thể phục hồi tốt nhất v&agrave; hỗ trợ cho bạn c&oacute; một thể trạng tốt hơn trong những lần chạy sau nh&eacute;.&nbsp;</p>

                                <h3><strong>Ăn trước hay sau khi chạy tốt hơn ?</strong></h3>

                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203241/truoc-khi-chay-ben-nen-an-gi-wheyshop-vn-2_compressed_dc0dur.jpg" style="width: 650px; height: 433px;" type="image" /></strong></p>

                                <p>Th&ocirc;ng thường, đối với những người đ&atilde; c&oacute; kinh nghiệm chạy bộ l&acirc;u năm th&igrave; thường c&oacute; c&acirc;u trả lời rằng: &ldquo;đ&oacute;i th&igrave; ăn&rdquo;. L&yacute; do l&agrave; bởi bạn kh&ocirc;ng thể chạy bộ với một chiếc bụng đ&oacute;i được, điều n&agrave;y sẽ khiến thể lực của bạn đi xuống nhanh ch&oacute;ng v&agrave; khiến bạn giảm hiệu suất tập luyện.&nbsp;</p>

                                <p>Hơn nữa, sau khi ho&agrave;n th&agrave;nh cuộc đua th&igrave; năng lượng c&ograve;n lại trong cơ thể của bạn l&agrave; rất thấp, do đ&oacute; bạn đương nhi&ecirc;n phải bổ sung ngay để tr&aacute;nh bị kiệt quệ v&agrave; mệt mỏi qu&aacute; mức.&nbsp;</p>

                                <p>C&oacute; thể n&oacute;i rằng, việc trước khi chạy bền n&ecirc;n ăn g&igrave; v&agrave; sau đ&oacute; n&ecirc;n ăn g&igrave; c&ograve;n t&ugrave;y thuộc v&agrave;o b&agrave;i tập, cuộc đua hay kể cả l&agrave; với thể trạng của từng người, do đ&oacute; kh&ocirc;ng c&oacute; chuyện ăn trước hay sau khi chạy bộ tốt hơn m&agrave; h&atilde;y t&ugrave;y theo thể trạng của bản th&acirc;n m&agrave; lựa chọn ra những loại thức ăn ph&ugrave; hợp với cơ thể nhất nh&eacute;.&nbsp;</p>

                                <h3><strong>Những lưu &yacute; kh&aacute;c đảm bảo sức bền cho người chạy bộ</strong></h3>

                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203281/truoc-khi-chay-ben-nen-an-gi-wheyshop-vn-3_compressed_j65oej.jpg" style="width: 650px; height: 347px;" type="image" /></strong></p>

                                <p>C&oacute; 2 lưu &yacute; quan trọng nhất đối với việc trước khi chạy bền n&ecirc;n ăn g&igrave; để gi&uacute;p bạn c&oacute; thể trạng tốt nhất m&agrave; bạn kh&ocirc;ng thể bỏ qua, h&atilde;y xem ngay trước khi chạy bền n&ecirc;n l&agrave;m g&igrave; nh&eacute;:</p>

                                <p>- Uống nước đầy đủ: Kh&ocirc;ng chỉ cần ăn đủ dinh dưỡng m&agrave; việc bổ sung nước cũng rất quan trọng, những ng&agrave;y trước khi thi đấu, h&atilde;y uống nhiều hơn lượng nước cần thiết để cơ thể c&oacute; thể t&iacute;ch trữ nước, h&atilde;y cố gắng duy tr&igrave; việc uống nước cả trước, trong v&agrave; sau giờ chạy.&nbsp;</p>

                                <p>- Ngủ đủ giấc: Một giấc ngủ đủ s&acirc;u cũng rất quan trọng, bởi n&oacute; sẽ gi&uacute;p bạn cảm thấy tỉnh t&aacute;o hơn, sung sức hơn v&agrave;o h&ocirc;m sau gi&uacute;p cải thiện hiệu suất cho những b&agrave;i tập hay những cuộc thi sắp tới.&nbsp;</p>

                                <p>Ngo&agrave;i việc bổ sung đầy đủ dinh dưỡng, bạn cũng n&ecirc;n chăm ch&uacute;t v&agrave;o những lưu &yacute; kh&aacute;c đảm bảo sức bền cho người chạy bộ đ&atilde; được n&ecirc;u ph&iacute;a tr&ecirc;n để c&oacute; thể đảm bảo cho cơ thể c&oacute; một thể trạng tốt nhất trong qu&aacute; tr&igrave;nh thi đấu nh&eacute;.&nbsp;</p>

                                <p>Như vậy, <strong><em>Gymer Store</em></strong>&nbsp;đ&atilde; gi&uacute;p bạn t&igrave;m hiểu&nbsp;<strong>trước khi chạy bền n&ecirc;n ăn g&igrave;</strong>&nbsp;v&agrave; l&agrave;m g&igrave; để c&oacute; thể c&oacute; sức khỏe tốt nhất g&oacute;p phần cải thiện qu&aacute; tr&igrave;nh tập luyện cũng như cuộc đua của bạn rồi đ&oacute;. H&atilde;y lưu &yacute; đến những điều tr&ecirc;n để c&oacute; một th&agrave;nh t&iacute;ch tập luyện tốt nhất nh&eacute;!</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589203432/bo-sung-nuoc-truoc-khi-tap_ztnjbs.jpg',
                'hot' => '1',
                'category_news_id' => '3',
                'views' => '15',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '11',
                'title' => 'Ăn gì để phát triển chiều cao nhanh và hiệu quả nhất',
                'summary' => 'Tăng chiều cao là điều mà hầu hết ai cũng mong muốn, nhất là các bạn đang ở trong giai đoạn tuổi dậy thì [...]',
                'content' => '<p><strong>Tăng chiều cao l&agrave; điều m&agrave; hầu hết ai cũng mong muốn, nhất l&agrave; c&aacute;c bạn đang ở trong giai đoạn tuổi dậy th&igrave; v&agrave; sau đ&oacute;. Tuy nhi&ecirc;n, kh&ocirc;ng phải ai cũng biết n&ecirc;n ăn g&igrave; để ph&aacute;t triển chiều cao trong những giai đoạn n&agrave;y. Vậy h&atilde;y c&ugrave;ng <em>Gymer Store</em>&nbsp;t&igrave;m hiểu ngay nh&eacute;!</strong></p>

                                                <p>&nbsp;</p>

                                                <h2>Ăn g&igrave; để tăng chiều cao</h2>

                                                <p>Dinh dưỡng chiếm một phần kh&aacute; quan trọng trong việc bảo vệ sức khỏe cũng như tăng khả năng ph&aacute;t triển chiều cao, h&atilde;y c&ugrave;ng điểm ngay qua 10 loại thực phẩm gi&uacute;p tăng chiều cao tối đa ngay sau đ&acirc;y nh&eacute;.</p>

                                                <h3><strong>Củ cải&nbsp;</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203643/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-6_compressed_lopxnn.jpg" style="width: 650px; height: 599px;" type="image" /></strong></p>

                                                <p>Củ cải rất gi&agrave;u hormone tăng trưởng, c&aacute;c hormone n&agrave;y c&oacute; t&aacute;c dụng rất tốt trong việc k&iacute;ch th&iacute;ch tăng chiều cao. Ngo&agrave;i ra, loại củ n&agrave;y cũng chứa nhiều chất xơ c&ugrave;ng Vitamin v&agrave; Kho&aacute;ng chất gi&uacute;p tăng k&iacute;ch th&iacute;ch tố cho cơ thể.&nbsp;</p>

                                                <h3><strong>Trứng&nbsp;</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203694/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-8_compressed-1024x679_ksox5z.jpg" style="width: 650px; height: 431px;" type="image" /></strong></p>

                                                <p>Trứng rất gi&agrave;u Protein v&agrave; c&aacute;c chất b&eacute;o tốt th&uacute;c đẩy khả năng tăng chiều cao của bạn, hơn nữa h&agrave;m lượng Protein c&oacute; chỉ số sinh học cao c&ograve;n gi&uacute;p bạn c&oacute; khả năng tăng cơ bắp.&nbsp;</p>

                                                <h3><strong>Rau ch&acirc;n vịt</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203743/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-9_compressed_vsp19g.jpg" style="width: 650px; height: 488px;" type="image" /></strong></p>

                                                <p>Rau ch&acirc;n vịt l&agrave; loại rau xanh thường thấy, ch&uacute;ng c&oacute; khả năng cải thiện hệ miễn dịch rất hiệu quả, hơn nữa, rau ch&acirc;n vịt c&ograve;n chứa rất nhiều canxi v&agrave; sắt &ndash; yếu tố h&agrave;ng đầu gi&uacute;p bạn ph&aacute;t triển chiều cao.&nbsp;</p>

                                                <h3><strong>Tr&aacute;i c&acirc;y</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203805/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-2_compressed-1024x618_yxiotd.jpg" style="width: 650px; height: 392px;" type="image" /></strong></p>

                                                <p>C&aacute;c loại tr&aacute;i c&acirc;y đều rất gi&agrave;u Vitamin, kh&ocirc;ng những cung cấp cho bạn một sức khỏe to&agrave;n diện, cải thiện hệ miễn dịch cơ thể m&agrave; c&ograve;n gi&uacute;p xương của bạn chắc khỏe hơn v&agrave; ph&aacute;t triển tốt hơn.&nbsp;</p>

                                                <h3><strong>Sữa chua</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203856/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-5_compressed-1024x683_aka2oy.jpg" style="width: 650px; height: 434px;" type="image" /></strong></p>

                                                <p>Nếu bạn đang cần t&igrave;m một thực phẩm chứa nhiều Vitamin D v&agrave; canxi th&igrave; sữa chua ch&iacute;nh l&agrave; một loại thực phẩm m&agrave; bạn kh&ocirc;ng thể thiếu, việc ăn sữa chua c&ograve;n cung cấp th&ecirc;m cho bạn enzym ti&ecirc;u h&oacute;a gi&uacute;p hệ ti&ecirc;u h&oacute;a khỏe mạnh. Bạn c&oacute; thể kết hợp ăn sữa chua với một số loại tr&aacute;i c&acirc;y để tăng th&ecirc;m hương vị cũng như dinh dưỡng.&nbsp;</p>

                                                <h3><strong>Thịt G&agrave;&nbsp;</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203917/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-4_compressed-1024x753_o4lbrs.jpg" style="width: 650px; height: 478px;" type="image" /></strong></p>

                                                <p>Thịt g&agrave; l&agrave; một loại thực phẩm l&yacute; tưởng bởi n&oacute; chứa rất nhiều Protein, gi&agrave;u canxi cho xương chắc khỏe gi&uacute;p cao lớn hơn. Thịt g&agrave; cũng &iacute;t cholesterol xấu hơn so với c&aacute;c loại thịt đỏ do đ&oacute; thịt g&agrave; rất được ưa chuộng.&nbsp;</p>

                                                <h3><strong>Sữa</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589203970/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-10_compressed-1024x882_borhu3.jpg" style="width: 650px; height: 560px;" type="image" /></strong></p>

                                                <p>Cũng giống như sữa chua, sữa l&agrave; một nguồn cung cấp canxi rất tốt, bạn n&ecirc;n uống một cốc sữa v&agrave;o mỗi ng&agrave;y v&igrave; kh&ocirc;ng những gi&uacute;p bạn tăng chiều cao m&agrave; n&oacute; c&ograve;n gi&uacute;p xương bạn chắc khỏe hơn đấy.&nbsp;</p>

                                                <h3><strong>Đậu n&agrave;nh</strong>&nbsp;</h3>

                                                <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204022/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-3_compressed-1024x720_ec4now.jpg" style="width: 650px; height: 457px;" type="image" /></p>

                                                <p>Nếu bạn l&agrave; người ăn chay th&igrave; đ&acirc;y l&agrave; thực phẩm d&agrave;nh cho bạn, đậu n&agrave;nh chứa rất nhiều canxi, nếu d&ugrave;ng h&agrave;ng ng&agrave;y bạn c&oacute; thể sẽ tăng th&ecirc;m chiều cao hiệu quả hơn. Đậu n&agrave;nh cũng chứa kh&aacute; nhiều Protein, hỗ trợ cho việc cải thiện mật độ xương v&agrave; tăng cơ bắp.&nbsp;</p>

                                                <h3><strong>Chuối</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204079/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-7_compressed-1024x640_movduh.jpg" style="width: 650px; height: 406px;" type="image" /></strong></p>

                                                <p>Chuối tuy kh&ocirc;ng cung cấp canxi nhiều như những thực phẩm kh&aacute;c, tuy nhi&ecirc;n, đ&acirc;y l&agrave; lại l&agrave; một nguồn kho&aacute;ng chất Kali v&agrave; Mangan rất tốt cho sức khỏe, Kali sẽ gi&uacute;p xương v&agrave; răng bạn chắc khỏe hơn, đồng thời mangan sẽ gi&uacute;p x&acirc;y dựng sức khỏe xương khớp hiệu quả.&nbsp;</p>

                                                <h3><strong>Hạt v&agrave; c&aacute;c loại quả hạch</strong></h3>

                                                <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204108/an-gi-de-phat-trien-chieu-cao-wheyshop-vn-1_compressed-1024x576_zeeeva.jpg" style="width: 650px; height: 366px;" type="image" /></strong>C&aacute;c loại hạt v&agrave; quả hạch thường chứa nhiều chất b&eacute;o tốt c&ugrave;ng Vitamin v&agrave; kho&aacute;ng chất, c&aacute;c chất b&eacute;o tốt rất c&oacute; lợi cho cơ thể, ch&uacute;ng l&agrave;m b&ocirc;i trơn c&aacute;c khớp xương, đem lại khả năng tăng chiều cao tốt hơn nhờ sụn khớp linh hoạt .</p>

                                                <p>Như vậy, <em><strong>Gymer Store</strong></em>&nbsp;đ&atilde; gi&uacute;p bạn trả lời c&acirc;u hỏi &ldquo;ăn g&igrave; để ph&aacute;t triển chiều cao&rdquo; rồi đ&oacute;, h&atilde;y lưu lại ngay để tham khảo v&agrave; tạo ra cho m&igrave;nh một chế độ dinh dưỡng ph&ugrave; hợp gi&uacute;p ph&aacute;t triển chiều cao tối đa nh&eacute;. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng!</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589204267/_lXw-Gk_zVAfTNyDBNiSC3C4MQ9k0gaqs3y5m4XtVIsGXFM9cxI1DcoWSGdVvl5MXoXH0XMosEBe7dhhltULrnM_pPz9oYhc6CR8QQ_rm71h0.png',
                'hot' => '1',
                'category_news_id' => '3',
                'views' => '17',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'id' => '12',
                'title' => 'Sự thật về uống cafe giúp giảm cân hiệu quả',
                'summary' => 'Cafe là một thức uống hiệu quả giúp bạn tỉnh táo hơn, tập trung hơn. Ngoài ra, hiện nay có rất nhiều người thường xuyên uống Cafe [...]',
                'content' => '<p><strong>Cafe l&agrave; một thức uống hiệu quả gi&uacute;p bạn tỉnh t&aacute;o hơn, tập trung hơn. Ngo&agrave;i ra, hiện nay c&oacute; rất nhiều người thường xuy&ecirc;n uống Cafe bởi tin rằng Cafe c&ograve;n c&oacute; t&aacute;c dụng gi&uacute;p giảm c&acirc;n hiệu quả. Vậy uống cafe c&oacute; giảm c&acirc;n kh&ocirc;ng? H&atilde;y để Gymer Store&nbsp;gi&uacute;p bạn trả lời c&acirc;u hỏi n&agrave;y nh&eacute;.</strong></p>

                                                    <p><strong>Nguồn gốc của xu hướng giảm c&acirc;n bằng cafe&nbsp;</strong></p>

                                                    <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204411/uong-cafe-co-giam-can-khong-wheyshop-vn-2_compressed_ckzsbd.jpg" style="width: 650px; height: 488px;" type="image" /></strong></p>

                                                    <p>Nguồn gốc của xu hướng n&agrave;y bắt nguồn từ cuốn s&aacute;ch &ldquo;The Coffe Lover&rsquo;s Diet&rdquo;&nbsp; của t&aacute;c giả Bob Arnot. Theo như cuốn s&aacute;ch, việc uống Cafe nhiều lần trong ng&agrave;y gi&uacute;p tăng cường qu&aacute; tr&igrave;nh trao đổi chất, đốt ch&aacute;y chất b&eacute;o hiệu quả, ngăn chặn sự hấp thu calo v&agrave; k&igrave;m h&atilde;m cơn th&egrave;m ăn.&nbsp;</p>

                                                    <p>Người viết s&aacute;ch đ&atilde; lấy cảm hứng để cho ra đời đề t&agrave;i sau một nghi&ecirc;n cứu về những người sống tr&ecirc;n h&ograve;n đảo Ikaria của Hy Lạp, nơi c&oacute; rất nhiều người vẫn khỏe mạnh d&ugrave; đ&atilde; lớn tuổi. &Ocirc;ng tin rằng sức khỏe v&agrave; tuổi thọ của họ ch&iacute;nh l&agrave; do uống nhiều c&agrave; ph&ecirc; gi&agrave;u chất chống oxy h&oacute;a.</p>

                                                    <p>Nếu bạn đang c&oacute; &yacute; định giảm c&acirc;n bằng cafe, th&igrave; bạn phải uống khoảng 3 t&aacute;ch cafe trong 1 ng&agrave;y&nbsp; với loại cafe rang nhẹ. Loại cafe n&agrave;y c&oacute; ưu điểm gi&agrave;u chất chống oxy h&oacute;a hơn so với những loại rang sẫm m&agrave;u hơn.&nbsp;</p>

                                                    <p>Tuy nhi&ecirc;n, c&aacute;ch giảm c&acirc;n n&agrave;y cũng c&oacute; một số bất lợi, đầu ti&ecirc;n l&agrave; bạn sẽ dễ tăng c&acirc;n trở lại hơn, thứ 2 l&agrave; do h&agrave;m lượng caffeine cao l&acirc;u ng&agrave;y c&oacute; thể khiến bạn gặp nhiều rủi ro về sức khỏe hơn.&nbsp;</p>

                                                    <h2><strong>Cafe c&oacute; những t&aacute;c dụng g&igrave;?</strong></h2>

                                                    <p>Cafe c&oacute; rất nhiều t&aacute;c dụng đối với cơ thể, đặc biệt l&agrave; đối với với những người kh&ocirc;ng bị dị ứng với cafe. Một số t&aacute;c dụng tốt m&agrave; cafe đem lại như sau:&nbsp;</p>

                                                    <h3>Cafe l&agrave;m giảm sự th&egrave;m ăn</h3>

                                                    <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204440/uong-cafe-co-giam-can-khong-wheyshop-vn-1_compressed-1024x640_rkbksf.jpg" style="width: 650px; height: 406px;" type="image" /></p>

                                                    <p>Cafe c&oacute; t&aacute;c dụng l&agrave;m giảm sự them ăn, c&aacute;c nghi&ecirc;n cứu đ&atilde; chỉ ra rằng nếu uống cafe trước bữa ăn th&igrave; sẽ giảm đ&aacute;ng kể lượng thức ăn m&agrave; bạn nạp v&agrave;o trong bữa ăn. Tuy nhi&ecirc;n, việc uống cafe khoảng 3 &ndash; 4 tiếng trước khi ăn dường như kh&ocirc;ng c&oacute; t&aacute;c dụng g&igrave;.&nbsp;</p>

                                                    <h3>Cafe k&iacute;ch th&iacute;ch trao đổi chất&nbsp;</h3>

                                                    <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204452/uong-cafe-co-giam-can-khong-wheyshop-vn-3_compressed_bn6mfj.jpg" style="width: 650px; height: 520px;" type="image" /></p>

                                                    <p>Cafe c&oacute; t&aacute;c dụng k&iacute;ch th&iacute;ch đốt ch&aacute;y calo v&agrave; chất b&eacute;o nhiều hơn, khiến bạn giảm c&acirc;n dễ d&agrave;ng hơn. Trong 1 nghi&ecirc;n cứu với 600 người tham gia đ&atilde; cho thấy h&agrave;m lượng caffeine cao c&oacute; ảnh hưởng rất lớn tới việc giảm mỡ. Khi tăng gấp đ&ocirc;i lượng caffeine cho những người tham gia th&igrave; trọng lượng, v&agrave; khối lượng chất b&eacute;o của họ giảm từ 17 &ndash; 28%.&nbsp;</p>

                                                    <h3>Cafe t&aacute;c động đến mỡ thừa</h3>

                                                    <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204464/uong-cafe-co-giam-can-khong-wheyshop-vn-4_compressed_vv9g0y.jpg" style="width: 650px; height: 488px;" type="image" /></p>

                                                    <p>Cafe k&iacute;ch th&iacute;ch hệ thần kinh gửi t&iacute;n hiệu đến c&aacute;c tế b&agrave;o mỡ, điều khiển sự ph&acirc;n hủy chất b&eacute;o. Tuy nhi&ecirc;n, việc giải ph&oacute;ng chất b&eacute;o n&agrave;y sẽ kh&ocirc;ng c&oacute; t&aacute;c dụng nếu lượng calo bạn nạp v&agrave;o cơ thể lớn hơn số calo m&agrave; bạn đ&agrave;o thải.&nbsp;</p>

                                                    <h2><strong>Sự thật về uống cafe g&uacute;p giảm c&acirc;n, N&oacute; c&oacute; hại g&igrave; hay kh&ocirc;ng?</strong></h2>

                                                    <p><strong><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589204476/uong-cafe-co-giam-can-khong-wheyshop-vn-7_compressed-1024x683_gyl1hz.jpg" style="width: 650px; height: 434px;" type="image" /></strong></p>

                                                    <p>Việc uống cafe gi&uacute;p giảm c&acirc;n c&oacute; những đặc điểm tốt cho cơ thể, nhưng cũng c&oacute; một số t&aacute;c hại nhất định như:&nbsp;</p>

                                                    <p><strong>Lượng caffeine cao qu&aacute; mức</strong></p>

                                                    <p>Caffeine c&oacute; t&aacute;c dụng tăng cường trao đổi chất, tuy nhi&ecirc;n, lượng caffeine qu&aacute; cao lại đem lại một vấn đề nguy hiểm cho sức khỏe, đ&oacute; l&agrave; t&igrave;nh trạng cao huyết &aacute;p.&nbsp;</p>

                                                    <p>Cafe cũng l&agrave; một chất lợi tiểu, n&oacute; sẽ khiến bạn đi tiểu nhiều v&agrave; đ&agrave;o thải chất lỏng ra khỏi cơ thể. Một h&agrave;m lượng kali sẽ bị tho&aacute;t ra theo đường nước tiểu g&acirc;y n&ecirc;n t&igrave;nh trạng thiếu kali, g&acirc;y ra c&aacute;c vấn đề về bệnh tim mạch v.v..</p>

                                                    <p><strong>Dễ tăng c&acirc;n trở lại&nbsp;</strong></p>

                                                    <p>Cơ thể ch&uacute;ng ta rất th&ocirc;ng minh, n&oacute; sẽ thay đổi theo số lượng calo m&agrave; bạn ti&ecirc;u thụ. Việc bạn giảm c&acirc;n bằng cafe sẽ l&agrave;m lượng calo lớn bị sụt giảm đột ngột, khi đ&oacute; cơ thể của bạn sẽ phản ứng theo bằng c&aacute;ch giảm khả năng trao đổi chất. Điều n&agrave;y l&agrave;m giảm đi lượng calo bị đốt ch&aacute;y, hơn nữa n&oacute; c&ograve;n g&acirc;y ra cảm gi&aacute;c th&egrave;m ăn, khiến bạn ăn nhiều hơn v&agrave; dễ tăng c&acirc;n trở lại.&nbsp;</p>

                                                    <p><strong>Độ an to&agrave;n l&acirc;u d&agrave;i kh&ocirc;ng đảm bảo</strong></p>

                                                    <p>Việc giảm c&acirc;n bằng cafe sẽ khiến bạn phải nạp một lượng caffeine lớn trong một thời gian d&agrave;i, điều n&agrave;y khiến ảnh hưởng đến sức khỏe cơ thể, c&oacute; thể g&acirc;y t&igrave;nh trạng mất ngủ, trầm cảm, chứng nghiện cafe sẽ khiến bạn khi kh&ocirc;ng c&oacute; cafe sẽ g&acirc;y mệt mỏi uể oải, thiếu tập trung. Chưa hề c&oacute; một nghi&ecirc;n cứu n&agrave;o cho thấy việc giảm c&acirc;n bằng cafe đem lại hiệu quả duy tr&igrave; l&acirc;u d&agrave;i v&agrave; an to&agrave;n tuyệt đối.&nbsp;</p>

                                                    <p>Qua b&agrave;i việt tr&ecirc;n, <strong>Gymer Store</strong>&nbsp;đ&atilde; gi&uacute;p bạn trả lời c&acirc;u hỏi &ldquo;uống cafe c&oacute; giảm c&acirc;n kh&ocirc;ng?&rdquo; rồi đ&oacute;. Để c&oacute; thể giảm c&acirc;n hiệu quả, bạn n&ecirc;n c&oacute; một chế độ tập luyện v&agrave; dinh dưỡng khoa học cũng như ki&ecirc;n tr&igrave; để c&oacute; thể đem lại hiệu quả l&acirc;u d&agrave;i, đừng n&ecirc;n d&ugrave;ng qu&aacute; nhiều cafe v&agrave; coi đ&oacute; l&agrave; &ldquo;thần dược&rdquo; giảm c&acirc;n nữa nh&eacute;.</p>',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1589205083/uong-cafe-giam-can-don-tet-1-910x664_wpbvc0.jpg',
                'hot' => '1',
                'category_news_id' => '3',
                'views' => '5',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            /*[
                'id' => '13',
                'title' => '',
                'summary' => '[...]',
                'content' => '',
                'images' => '',
                'hot' => '1',
                'category_news_id' => '2',
                'views' => '12',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],*/
            [
                'id' => '13',
                'title' => 'test',
                'summary' => 'Thuật ngữ “THỰC PHẨM BỔ SUNG” có lẽ đã quá quen với tất cả chúng ta đặc biệt là các bạn tập luyện thể hình, chơi thể thao. Nhưng để hiểu chính xác, cụ thể vể nó thì rất ít người biết.[...]',
                'content' => '<h2><strong>Thực Phẩm Bổ Sung l&agrave; g&igrave;?</strong></h2>

                                        <p>Thuật ngữ&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;bắt nguồn từ Mỹ v&agrave;o năm 1994, do cục quản l&yacute; thực phẩm v&agrave; thuốc Mỹ (FDA) quy định. Theo cơ quan n&agrave;y,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;l&agrave; c&aacute;c sản phẩm bổ sung cho chế độ ăn uống h&agrave;ng ng&agrave;y bao gồm một hay nhiều c&aacute;c th&agrave;nh phần như: Protein,Tinh bột, Vitamin, kho&aacute;ng chất, c&aacute;c axit b&eacute;o, axit amin, thảo dược, chất xơ, thực vật hay c&aacute;c sản phẩm c&oacute; sự kết hợp của c&aacute;c th&agrave;nh phần n&agrave;y.</p>

                                        <p><strong>&nbsp; Thực phẩm bổ sung&nbsp;</strong>l&agrave; bổ sung th&ecirc;m dinh dưỡng hằng ng&agrave;y kh&aacute;c với Thực phẩm chức năng cũng l&agrave; bổ sung dinh dưỡng nhưng phục vụ một mục đ&iacute;ch n&agrave;o đ&oacute;.</p>

                                        <p><strong>&nbsp; Thực phẩm bổ sung&nbsp;</strong>vẫn c&oacute; trong tự nhi&ecirc;n, c&oacute; thể c&ograve;n rất &iacute;t hoặc kh&ocirc;ng ho&agrave;n chỉnh , n&ecirc;n c&aacute;c nh&agrave; sản xuất l&agrave;m n&ecirc;n&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;để đ&aacute;p ứng đầy đủ dinh dưỡng hơn cho cơ thể. Như&nbsp;<strong><a href="https://wheyshop.vn/category/whey-protein-html" target="_blank" title="Whey Protein">Whey Protein</a></strong>&nbsp;gi&uacute;p cơ thể hấp thu đạm nhanh hơn.</p>

                                        <p>&nbsp;</p>

                                        <h3><strong>Tại sao bạn n&ecirc;n sử dụng Thực Phẩm Bổ Sung d&agrave;nh cho người tập gym , thể h&igrave;nh .</strong></h3>

                                        <p>Như đ&atilde; n&oacute;i ở tr&ecirc;n,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;vẫn c&oacute; trong tự nhi&ecirc;n nhưng c&oacute; thể rất &iacute;t hoặc kh&ocirc;ng ho&agrave;n chỉnh, n&ecirc;n việc bổ sung dinh dưỡng qua chế độ ăn uống hằng ng&agrave;y l&agrave; kh&ocirc;ng đủ. Đặc biệt l&agrave; trong cuộc sống bộn bề c&ocirc;ng việc l&agrave;m cho mọi người kh&ocirc;ng đủ thời gian chăm s&oacute;c cho bữa ăn hằng ng&agrave;y của m&igrave;nh. Dẫn tới việc thiếu dinh dưỡng, sức khoẻ suy yếu.<br />
                                        Ch&iacute;nh v&igrave; vậy,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;l&agrave; nguồn dinh dưỡng tiện lợi v&agrave; cung cấp, đ&aacute;p ứng đủ dinh dưỡng h&agrave;ng ng&agrave;y cho bạn.</p>

                                        <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589169334/thuc-pham-ban-gay-ung-thu-00-768x512_ukm9yc.jpg" style="height:433px; width:650px" type="image" /></p>

                                        <p>C&agrave;ng nguy hiểm hơn ng&agrave;y nay, vấn nạn an to&agrave;n thực phẩm l&agrave; mối đe dạo nguy hiểm nhất tới sức khoẻ của ch&uacute;ng ta. Thực phẩm kh&ocirc;ng an to&agrave;n: rau củ quả với dư lượng lớn chất bảo quản v&agrave; thuốc trừ s&acirc;u, thịt động vật nhiễm thuốc k&iacute;ch tăng trưởng,.. c&agrave;ng l&agrave;m sức khoẻ của bạn bị đe dọa nghi&ecirc;m trọng. Đ&oacute; cũng ch&iacute;nh l&agrave; nguy&ecirc;n nh&acirc;n g&acirc;y n&ecirc;n c&aacute;c bệnh ung thư.<br />
                                        V&igrave; vậy, với sự ph&aacute;t triển kh&ocirc;ng ngừng của khoa học về chất dinh dưỡng đ&atilde; cho ra đời c&aacute;c thực phẩm bổ sung để giải quyết c&aacute;c vấn đề tr&ecirc;n.&nbsp;<strong>Thực phẩm bổ sung&nbsp;</strong>cung cấp dinh dưỡng đầy đủ cho cơ thể bạn, ho&agrave;n to&agrave;n tự nhi&ecirc;n.</p>

                                        <p>Sau nhiều năm ph&aacute;t triển, ho&agrave;n thiện kh&ocirc;ng ngừng,&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;trở n&ecirc;n đa dạng v&agrave; phong ph&uacute;. Nhằm cung cấp v&agrave; phục vụ mọi nhu cầu dinh dưỡng h&agrave;ng ng&agrave;y của mọi người. Để thuận tiện trong qu&aacute; tr&igrave;nh sử dụng, n&oacute; c&oacute; thể được chiết xuất dưới dang vi&ecirc;n n&eacute;n hoặc vi&ecirc;n nang mềm, dạng nước hay dạng bột,..</p>

                                        <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589169375/wwhey-protein-wwheyshop-768x352_kwajli.jpg" style="height:298px; width:650px" type="image" /></p>

                                        <h3><strong>Những điều kh&ocirc;ng thể bỏ qua về sử dụng Thực Phẩm Bổ Sung d&agrave;nh cho người tập gym , thể h&igrave;nh</strong></h3>

                                        <p><strong>Thực phẩm bổ sung kh&ocirc;ng phải l&agrave; thuốc!</strong></p>

                                        <p>Kh&ocirc;ng n&ecirc;n nhầm lẫn giữa&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;với thực phẩm chức năng, c&aacute;c loại thuốc hay chất k&iacute;ch th&iacute;ch kh&aacute;c. V&igrave;&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;ho&agrave;n to&agrave;n tự nhi&ecirc;n, bổ sung dinh dưỡng cho cơ thể gi&uacute;p bạn c&oacute; một cơ thể khỏe mạnh, tinh thần thoải m&aacute;i ,&nbsp;<strong>kh&ocirc;ng phục vụ bất kỳ mục đ&iacute;ch ri&ecirc;ng n&agrave;o hoặc bệnh n&agrave;o</strong>. Vậy n&ecirc;n mọi người kh&ocirc;ng n&ecirc;n lạm dụng thực phẩm bổ sung qu&aacute; mức cần thiết nhu cầu của cơ thể.&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;kh&ocirc;ng thể thay thế ho&agrave;n to&agrave;n bữa ăn h&agrave;ng ng&agrave;y của c&aacute;c bạn.&nbsp;<strong>Thực phẩm bổ sung</strong>&nbsp;chỉ bổ sung th&ecirc;m c&aacute;c dưỡng chất c&ograve;n thiếu trong c&aacute;c bữa ăn, sử dụng như bữa ăn phụ.</p>

                                        <p><input alt="" src="https://res.cloudinary.com/dzbi63fko/image/upload/v1589169386/thuc-pham-tot-cho-mat-2-768x384_lzw3hk.jpg" style="height:325px; width:650px" type="image" /></p>

                                        <h2><strong>Top 5 thực phẩm bổ sung tăng cơ giảm mỡ , tăng c&acirc;n mass gainer d&agrave;nh cho người tập gym , thể h&igrave;nh .</strong></h2>

                                        <p><strong>Thực phẩm bổ sung&nbsp;</strong>c&oacute; thể bổ sung đầy đủ c&aacute;c dưỡng chất cần thiết , t&ugrave;y từng mục ti&ecirc;u v&agrave; nhu cầu , mọi người chọn sử dụng c&aacute;c sản phẩm bổ sung kh&aacute;c nhau :</p>

                                        <p><strong>Thực phẩm bổ sung Vitamin Tổng hợp&nbsp;</strong>: bổ sung h&agrave;m lượng lợn c&aacute;c vitamin, kho&aacute;ng chất hỗ trợ tăng cường trao đổi chất, hệ miễn dịch, ti&ecirc;u h&oacute;a như&nbsp;<strong><a href="https://wheyshop.vn/san-pham/nutrabio-multisport" target="_blank">NutraBio&reg; Multi Sport</a></strong>&nbsp;,<strong><a href="https://wheyshop.vn/san-pham/opti-men-78" target="_blank">Optimen</a></strong>&nbsp;,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/platinum-multi-vitamin-74" target="_blank">Multi Vitamin</a></strong>,</p>

                                        <p><strong>Thực phẩm bổ sung&nbsp;<a href="#" target="_blank">Whey Protein</a>&nbsp;</strong>: bổ sung nguồn đạm hấp thu nhanh, hỗ trợ phục hồi , ph&aacute;t triển cơ bắp như&nbsp;<strong><a href="https://wheyshop.vn/san-pham/nutrabio-100-whey-protein-isolate-5lbs" target="_blank">NutraBio&reg; Whey Protein Isolate,</a></strong>&nbsp;Iso Surge, Iso 93,&hellip;</p>

                                        <p><strong>Thực phẩm bổ sung giảm c&acirc;n giảm mỡ Fatburn&nbsp;</strong>: bổ sung c&aacute;c chất gi&uacute;p tăng cường trao đổi chất cơ thể, chuyển h&oacute;a v&agrave; giảm lượng mỡ thừa , giảm c&acirc;n hiệu quả như&nbsp;<strong><a href="https://wheyshop.vn/san-pham/nutrabio-thermofuel" target="_blank">NutraBio&reg; ThermoFuel V.9</a></strong>&nbsp;,&nbsp;<a href="https://wheyshop.vn/san-pham/lipo-6-black-ultra-concentrate-133" target="_blank"><strong>Lipo 6</strong></a>,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/hydroxycut-hardcore-next-gen-83" target="_blank">Hydroxycut</a></strong>&nbsp;.</p>

                                        <p><strong>Thực phẩm bổ sung gi&agrave;u dinh dưỡng&nbsp;<a href="#">tăng c&acirc;n tăng cơ Mass Gainer</a>&nbsp;</strong>: bổ sung gi&agrave;u dinh dưỡng như Protein, đạm, chất b&eacute;o vừa đủ, vitamin, kho&aacute;ng chất gi&uacute;p tăng c&acirc;n nhanh, hiệu quả, kết hợp tập luyện tăng cơ nạc như&nbsp;<strong><a href="https://wheyshop.vn/thuong-hieu/elite-labs" target="_blank">Mass Muscle Gainer</a></strong>,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/mutant-mass-15lbs" target="_blank">Mutant Mass</a></strong>,&nbsp;<strong><a href="https://wheyshop.vn/san-pham/serious-mass-12lbs-5-4kg-54" target="_blank">Serious Mass</a></strong>, &hellip;</p>

                                        <p>Hy vọng b&agrave;i viết tr&ecirc;n đ&acirc;y, đ&atilde; cung cấp cho bạn nhiều kiến thức về&nbsp;<strong>Thực phẩm bổ sung</strong>. Từ giờ chắc chắn c&aacute;c bạn đ&atilde; c&oacute; c&aacute;i nh&igrave;n kh&aacute;i qu&aacute;t về n&oacute;. Biết c&aacute;ch sử dụng n&oacute; l&agrave;m sao cho hiệu quả v&agrave; tốt nhất rồi đ&uacute;ng kh&ocirc;ng n&agrave;o. Ch&uacute;c c&aacute;c bạn th&agrave;nh c&ocirc;ng, c&oacute; sức khoẻ dồi d&agrave;o, cuộc sống l&agrave;nh mạnh !!!</p>
                                        ',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1586698467/tpbs_iucj8e.jpg',
                'hot' => '1',
                'category_news_id' => '1',
                'views' => '20',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],

        ]);
    }
}
