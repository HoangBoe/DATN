<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'name' => 'Whey Gold Standard 5Lbs (2.27kg)',
                'description' => 'vị Socolca',
                'category_id' => '1',
                'price' => 1550000,
                'discount' => 5,
                'brand_id' => '1',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1584332733/gold-standard-whey-5lbs-chinh-hang_gr77b6.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Rule 1 Protein 5.3Lbs',
                'description' => '1 siêu phẩm tăng cơ được ưa chuộng nhất Việt Nam, thành phần: isolate + hydrolyzed',
                'category_id' => '1',
                'price' => 1650000,
                'discount' => 10,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062751/a72f0c4112ea398052264f2a6c4c34d6_1400x_upfotv.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Whey Gold Standard 100% Casein 2Lbs',
                'description' => 'Whey Gold Standard 100% Casein protein đóng vai trò rất quan trọng trong phát triển cơ bắp, hỗ trợ hệ miễn dịch và chống đau mỏi cơ, có thể giúp bạn giảm mỡ bụng, tăng cường năng lượng.',
                'category_id' => '1',
                'price' => 850000,
                'discount' => 5,
                'brand_id' => '1',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062089/1431709125720_cookie_dough_2_.600w_620x_dg8dba.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 6, 17, 29, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 6, 17, 29, 25)
            ],
            [
                'name' => 'Platinum HydroWhey 3.5Lbs',
                'description' => 'Platinum Hydrowhey là 1 sản phẩm tinh khiết nhất, dễ dàng hấp thụ giúp xây dựng cơ bắp hiệu quả trong thời gian ngắn nhất. Hydrowwhey dễ tan, không có chất béo, cholesterol.',
                'category_id' => '1',
                'price' => 1600000,
                'discount' => 5,
                'brand_id' => '1',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062197/71VsoQF38qL._AC_SX425__y4hwqc.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 6, 17, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 6, 17, 29, 25)
            ],
            [
                'name' => 'Optimum Pro Gainer 5.08Lbs',
                'description' => 'Optimum Pro Gainer bao gồm những Protein có giá trị sinh học cao, điều đó có nghĩa chúng dễ dàng tiêu hóa và hấp thụ để xây dựng cơ bắp và tăng lượng cơ nạc nhanh chóng.',
                'category_id' => '2',
                'price' => 1250000,
                'discount' => 0,
                'brand_id' => '1',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062260/71ojX-kuj9L._AC_SX425__hkqtm3.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Optimum BCAA 1000 200 viên',
                'description' => 'Optimum BCAA 1000 rất hiệu quả trong việc phát triển cơ bắp. Đồng thời sản phẩm này cũng ngăn ngừa sự cố cơ bắp và tăng cường khả năng đồng hóa của nó (xây dựng cơ bắp).',
                'category_id' => '3',
                'price' => 500000,
                'discount' => 0,
                'brand_id' => '1',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062304/Optimum-Nutrition-BCAA-1000-Caps-400_620x_jei2z4.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'ON Opti Men 150 viên',
                'description' => 'Một công thức bổ sung dinh dưỡng hoàn hảo với 75 thành phần có trong mỗi viên. Opti-Men cung cấp tất cả các chất cần thiết trong 1 viên và bạn có thể uống sáng, chiều và tối.',
                'category_id' => '4',
                'price' => 750000,
                'discount' => 15,
                'brand_id' => '1',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062353/84173_front_gbbbkb.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 9, 17, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 9, 17, 29, 25)
            ],
            [
                'name' => 'Nutrabolics HydroPure 4,5lbs',
                'description' => 'Nutrabolics HydroPure 4,5lbs loại bỏ các chất béo, lactose và protein predigest để hình thành các chuỗi polypeptide nhỏ của axit amin hỗ trợ hình thành và cải tạo cơ bắp!',
                'category_id' => '1',
                'price' => 1800000,
                'discount' => 15,
                'brand_id' => '2',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062406/nutrabolics_hydropure_1024x1024_fkhaiy.png',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now()
            ],
            [
                'name' => 'Anabolic State BCAA',
                'description' => 'Anabolic State BCAA là sản phẩm bổ sung xây dựng và phục hồi cơ bắp mạnh nhất và đầy đủ nhất trên thị trường. Thành phần dinh dưỡng tổng hợp từ công nghệ cao dùng sau tập luyện.',
                'category_id' => '3',
                'price' => 690000,
                'discount' => 0,
                'brand_id' => '2',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062448/nutrabolics-anabolic-state-new_wxzb9y.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 10, 17, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 10, 17, 29, 25)
            ],
            [
                'name' => 'Aggro 168 viên',
                'description' => 'Aggro là 1 sản phẩm có chứa kẽm và magie tăng hóc môn nam giới và tăng sinh lý nam giới tuyệt vời nhất từ trước tới. Sản phẩm chính hãng này được WheyStore phân phối trên toàn quốc.',
                'category_id' => '4',
                'price' => 890000,
                'discount' => 0,
                'brand_id' => '2',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062539/Gen5-ENG-Aggro-168Caps-Render-MidFront-04.19_1024x1024_x1vls4.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Cân tiểu ly Kitchen Scale 0.1 - 10kg',
                'description' => 'Cân tiểu ly Kitchen Scale max 10kg với độ chính xác cực cao với sai số chỉ 0.1% giúp bạn cân đo cực chuẩn lượng bột Whey, Mass, BCAA và các loại thực phẩm khác…',
                'category_id' => '6',
                'price' => 250000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062595/3336dsa342_q5q61n.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Labrada Lean Pro 8 5lbs',
                'description' => 'Bữa ăn nhanh, thông minh với Labrada Lean Pro 8 5lbs (2,27kg) sẽ giúp cho cơ bắp của bạn lớn hơn, mạnh mẽ hơn và gọn gàng nhanh chóng hơn bao giờ hết giúp bạn chống dị hóa cơ.',
                'category_id' => '1',
                'price' => 1600000,
                'discount' => 5,
                'brand_id' => '3',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062644/LP85CC-Labrada-Lean-Pro-8-5lbs-Cookies-Cream_ithxvu.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 11, 17, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 11, 17, 29, 25)
            ],
            [
                'name' => 'Muscle Mass Gainer 12Lbs',
                'description' => 'Muscle Mass Gainer 12Lbs là dòng sữa tăng cân cho người gầy thiếu cân, khó hấp thụ, bởi chỉ với một lượng phù hợp được hấp thụ Mass Gainer làm cơ thể dễ thích nghi, tăng cân lành mạnh.',
                'category_id' => '2',
                'price' => 1500000,
                'discount' => 10,
                'brand_id' => '3',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585062683/s-l640_k9vbf5.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'ISO 100 Isolate 100% 5 Lbs',
                'description' => 'Sử dụng ISO 100 Isolate 100% 5 Lbs (2,27kg) trước mỗi buổi luyện tập, sau luyện tập hoặc bất kì khi nào bạn cần nhằm bổ sung lượng protein chất lượng, hấp thụ nhanh cho cơ thể.',
                'category_id' => '1',
                'price' => 2100000,
                'discount' => 15,
                'brand_id' => '4',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585063250/0002932_dymatize-iso-100-5lb_625_zl1d7y.jpg',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now()
            ],
            [
                'name' => 'Super Protein Amino 6000',
                'description' => 'Dymatize Super Protein 6000 được coi là một trong những dòng amino mạnh nhất trên thị trường, cung cấp cho bạn tới 6 gram amino chất lượng cao trong 1 lần sử dụng, đảm bảo cung cấp đủ hàm lượng axit amin chất lượng cao mỗi ngày',
                'category_id' => '4',
                'price' => 300000,
                'discount' => 0,
                'brand_id' => '4',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585063137/179722_1_tlnarp.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Dymatize Super Mass 12Lbs',
                'description' => 'Sữa tăng cân Super Mass với thành phần nguyên liệu chất lượng cao và nguồn dưỡng chất tiêu chuẩn giúp gia tăng tối đa sức mạnh và kích thước cơ bắp - bảo vệ cơ bắp khỏi quá trình dị hóa.',
                'category_id' => '2',
                'price' => 1300000,
                'discount' => 2,
                'brand_id' => '4',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585063303/Dymatize-Super-Mass-Gainer-12lb-Fudge-Brownie_q8kdek.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Combat 100% Whey 5lbs',
                'description' => 'Combat 100% Whey 5lbs là một sự pha trộn siêu cao cấp có chứa 100% whey protein dành cho các vận động viên muốn duy trì cơ bắp, phục hồi cơ bắp và bổ sung chất dinh dưỡng sau tập.',
                'category_id' => '1',
                'price' => 1500000,
                'discount' => 5,
                'brand_id' => '5',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585063633/15_rrhiqp.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'MP BCAA 60 servings',
                'description' => 'MP BCAA 60 servings với 60 lần dùng là sản phẩm được đánh giá cực kỳ cần thiết cho sự phát triển cơ bắp và phục hồi cơ trong quá trình tập luyện.',
                'category_id' => '3',
                'price' => 650000,
                'discount' => 0,
                'brand_id' => '5',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585063688/81yrmGQKeGL._SX466__psqjbm.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mutant Madness 30 servings',
                'description' => 'Mutant Madness là dòng sản phẩm pre-workout với công thức cải tiến mang đến sự khác biệt rõ rệt về hiệu quả và năng suất tập luyện.',
                'category_id' => '5',
                'price' => 600000,
                'discount' => 0,
                'brand_id' => '6',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585065511/Mutant-Madness-30-Serves_sfg64u.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mutant BCAA 30 servings',
                'description' => 'Mutant BCAA 30 servings cung cấp 9.7g axit amin hỗ trợ phục hồi cơ bắp tốt nhất, 8 chất điện giải giữ cho cơ thể không bị mất nước. Vậy đối tượng sử dụng và cách dùng Mutant BCAA?',
                'category_id' => '3',
                'price' => 600000,
                'discount' => 5,
                'brand_id' => '6',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585065559/mutant-bcaa-30-servings-tropical-mango_2000x_rcdl5k.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mutant Iso Surge 5Lbs',
                'description' => 'Mutant Iso Surge cung cấp thành phần whey gồm: protein isolate và hydrolysate. Iso Surge ít chất béo, không pha trộn và đem lại nguồn Protein dồi dào với hương vị hấp dẫn, đơn giản.',
                'category_id' => '1',
                'price' => 1850000,
                'discount' => 5,
                'brand_id' => '6',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585065624/mutant-iso-surge-2.27kg_1_ojqghh.png',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 27, 17, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 28, 17, 29, 25)
            ],
            [
                'name' => 'Mutant Mass 15lbs',
                'description' => 'Mutant Mass 15lbs (6.8Kg) là cuộc cách mạng về tăng cơ bắp và cân nặng. Cung cấp cho cơ thể bạn một loạt các chất dinh dưỡng, phù hợp cho những người muốn thay đổi cân nặng.',
                'category_id' => '2',
                'price' => 1800000,
                'discount' => 0,
                'brand_id' => '6',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585065652/image_skuplv2170482_largeimage_x_450_white_nv82qv.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'MyProtein BCAAs 1kg 200 servings',
                'description' => 'MyProtein BCAAs không đơn giản chỉ là “nguyên liệu” xây dựng cơ lên các mô cơ mà còn ảnh hưởng đến việc tăng cân nặng của cơ thể. Tại WheyStore hàng chính hãng - giá tốt nhất!',
                'category_id' => '3',
                'price' => 1090000,
                'discount' => 0,
                'brand_id' => '7',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585065872/41wZg6BT9hL._SX466__u9ggcg.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Impact whey isolate 2.5kg 100 servings',
                'description' => 'Impact whey isolate 2.5kg 100 servings là sữa thể hình lý tưởng cho bất cứ ai tham gia vào tập luyện thường xuyên và đang tìm kiếm một nguồn protein chất lượng đáp ứng cho các buổi tập .',
                'category_id' => '1',
                'price' => 1500000,
                'discount' => 10,
                'brand_id' => '7',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585065906/10530911-1804357599175947_xonoau.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 2, 15, 17, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 2, 15, 17, 29, 25)
            ],
            [
                'name' => 'Ultimate iso SenSation 93 5LBS',
                'description' => 'Sữa Tăng Cơ Ultimate iso SenSation 93 5LBS hỗ trợ bổ sung dưỡng chất và cơ thể, là sự lựa chọn hàng đầu cho sức khỏe và vóc dáng của bạn. Hỗ trợ các bài tập luyện rất tốt cho VĐV.',
                'category_id' => '1',
                'price' => 1200000,
                'discount' => 15,
                'brand_id' => '8',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066053/286_ISO932.27kgVan-940x1018_470x509_crop_center_c9scau.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Muscle Juice Revolution 2600 5kg',
                'description' => 'Sản phẩm có hàm lượng Protein, Carbonhydrate, Glutamine giúp tăng cân phát triển cơ và chống viêm tốt. Đồng thời cung cấp tương đối đầy đủ các Axit Amin thiết yếu trong quá trình luyện tập.',
                'category_id' => '1',
                'price' => 1200000,
                'discount' => 0,
                'brand_id' => '8',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066103/muscle_juice_revolution_LRG_llbv1z.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'BPI Sports Best BCAA 30 Servings',
                'description' => 'BPI Sports Best BCAA là dòng sản phẩm hỗ trợ tổng hợp protein nuôi dưỡng cơ nạc, hạn chế tối đa khả năng dị hóa cơ bắp, hỗ trợ sản sinh glucose nội sinh, tái tạo phục hồi sau luyện tập.',
                'category_id' => '3',
                'price' => 500000,
                'discount' => 10,
                'brand_id' => '9',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066204/best-bcaa-300g-bpisports_1_ucxdfo.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'ISO HD 5lbs 100% Isolate',
                'description' => 'ISO HD là protein calo thấp, tinh khiết nhất cung cấp 25 gram Protein siêu cao cấp 100% Whey Protein & HYDROLYSATE mỗi khẩu phần. Với công nghệ tiên tiến hương vị sữa của bạn đã trở nên ngon hơn rất nhiều.',
                'category_id' => '1',
                'price' => 1500000,
                'discount' => 15,
                'brand_id' => '9',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066234/ISO-HD-70-Servs-Vanilla-Cookie_3000x3000-WEB_1000x_m6jwno.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'BPI Best Pre Workout 30 servings',
                'description' => 'BPI Best pre workout chứa các thành phần dinh dưỡng giúp tập trung tinh thần và cung cấp năng lượng, tăng cường sức mạnh và hiệu suất hoạt động của cơ bắp người tập luyện.',
                'category_id' => '5',
                'price' => 600000,
                'discount' => 10,
                'brand_id' => '9',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066274/61jwU9qjPjL._AC_SL1000__xdcoly.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Xà đơn gắn tường loại 1m',
                'description' => 'Xà đơn gắn tường thích hợp với gia đình có không gian nhỏ hẹp, gọn nhẹ dễ tháo lắp kích thước điều chỉnh của xà có thể kéo dài tới 1 mét dùng luyện tập cơ bắp, hỗ trợ điều trị bệnh thoái hóa xương, thoát vị đĩa đệm.',
                'category_id' => '6',
                'price' => 250000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066359/1540284375-xa-don-treo-tuong-inox-80cm-130cm-2_naquxe.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 3, 2, 15, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 2, 15, 29, 25)
            ],
            [
                'name' => 'Now Omega-3 200 viên',
                'description' => 'Viên dầu cá Now Omega-3 200 viên cô đặc là chủ yếu có nguồn gốc từ cá mòi, cá cơm, cá thu và hỗ trợ sức khỏe tim mạch. Omega không chứa Cholesterol - giảm nguy cơ mắc bệnh tim mạch.',
                'category_id' => '4',
                'price' => 400000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066432/11_elu2gb.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Test HD 90 Viên',
                'description' => 'TEST HD™ được đặc chế với thành phần boron được chứng minh giúp tăng test nhanh chóng trong vòng 7 ngày. Hóc môn nam tự do là thành phần hoạt tính cao nhất của Test, nó giúp tăng tốc sự phát triển cơ bắp lên tối đa.',
                'category_id' => '4',
                'price' => 600000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066467/PRODUCT-TESTHD_bc96f5b3-b112-46ed-a68c-3934b37f18ad__06866.1512062895_e1amtl.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 3, 5, 15, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 5, 15, 29, 25)
            ],
            [
                'name' => 'Swanson Milk Thistle 100 viên',
                'description' => 'Milk Thistle giúp hỗ trợ chức năng gan vượt trội, giúp gan luôn khỏe mạnh. Đặc biệt phù hợp với những người thường xuyên uống rượu, bia, dùng thuốc lá, làm việc trong môi trường bị ôi nhiễm,... gây ảnh hưởng xấu đến gan.',
                'category_id' => '4',
                'price' => 290000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066502/SW966_xykobv.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Mammoth Multi 30 Servings',
                'description' => 'Mammoth Multi cung cấp các vitamin và khoáng chất quan trọng giúp cơ thể có đầy đủ các chất thiết yếu, phát triển tốt toàn diện, luôn luôn khỏe mạnh tựa Voi Mammoth',
                'category_id' => '4',
                'price' => 400000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066539/mammoth_multi_riyuij.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Astaxanthin 60 servings chống lão hóa',
                'description' => 'Nutricost Astaxanthin là một chất chống oxy hóa mạnh, mang sắc tố màu đỏ, thuộc họ Carotene hòa tan trong chất béo. Dùng Astaxanthin đúng cách sẽ bảo vệ tế bào không bị lão hóa.',
                'category_id' => '4',
                'price' => 650000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066598/astaxanthin_60_softgels-1_2048x_dz2bus.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'C4 30 lần dùng',
                'description' => 'C4 Extreme là bột năng lượng được sử dụng trước lúc tập luyện giúp truyền lửa vào tâm trí của bạn, đốt cháy cơ bắp, tập luyện nhanh hơn, khỏe hơn, phục hồi và phát triển cơ bắp.',
                'category_id' => '5',
                'price' => 500000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066647/C4-Original-WF30_o2hryg.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 3, 16, 22, 21, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 16, 22, 29, 25)
            ],
            [
                'name' => 'The Ripper 30 servings',
                'description' => 'The Ripper 30 servings được tạo ra để hỗ trợ đốt mỡ và tăng sức mạnh cho các bài tập của Gymer. Tìm hiểu về thành phần, cách dùng và tác dụng với người tập thể hình của The Ripper.',
                'category_id' => '5',
                'price' => 500000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066701/81yRHvIwm3L._AC_SL1500__yhhwpp.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Scivation Xtend BCAA 30 servings',
                'description' => 'Scivation Xtend BCAA thúc đẩy sự giãn mạch và giúp kích thích hệ tuần hoàn kết hợp với việc tăng sản xuất oxit nitric, giúp cải thiện cơ bắp giữ nitơ và nâng cao tỷ lệ tổng hợp protein.',
                'category_id' => '3',
                'price' => 600000,
                'discount' => 15,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585066759/scivation-bcaas-30-servings-fruit-punch-scivation-xtend-bcaas-posted-protein-24858422928_2000x_liws3c.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Bình BPI 700ml màu trắng',
                'description' => 'Bình lắc BPI màu trắng của hãng BPI Sports, chất lượng nhựa 5 an toàn với người sử dụng. Có quai xách, chống rò nước, dễ dàng vệ sinh, nhỏ gọn có thể để trong balo thoải mái.',
                'category_id' => '6',
                'price' => 150000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585115526/binh-lac-bpi-700ml-chinh-hang-mau-trang_lmqqp0.jpg',
                'created_at' => \Carbon\Carbon::create(2020, 3, 16, 17, 21, 22),
                'updated_at' => \Carbon\Carbon::create(2020, 3, 16, 17, 21, 22)
            ],
            [
                'name' => 'Dây kéo Beast Max Strength',
                'description' => 'Dây kéo Beast Max Strength là loại dây có chất lượng tốt nhất hiện nay, với chất liệu siêu bền bảo hành lên tới 2 năm, dài tới 62 cm',
                'category_id' => '6',
                'price' => 150000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585115761/day-keo-beast-max-strength_qxakbl.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 3, 16, 17, 27, 22),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 16, 17, 29, 22)
            ],
            [
                'name' => 'Quấn cổ tay Beast Max Strength',
                'description' => 'Quấn cổ tay Beast Max Strength là loại quấn cổ tay có độ bền và độ thẩm mỹ cực cao, mang lại sự an toàn tuyệt đối dành cho bạn. Co giãn tối ưu và mang lại sự thoải mái khi sử dụng.',
                'category_id' => '6',
                'price' => 150000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585115882/80056cd5f99f29ad9c40a41db2d05171_s43q7p.jpg',
                'created_at'=>\Carbon\Carbon::create(2020, 3, 16, 17, 29, 30),
                'updated_at'=>\Carbon\Carbon::create(2020, 3, 16, 17, 29, 35)
            ],
            [
                'name' => 'Quấn gối Beast Max Strength',
                'description' => 'Quấn gối Beast Max Strength là sản phẩm cao cấp, thiết kế bản rộng, dầy và có độ co giãn tối ưu, dây kết dính an toàn giúp khớp gối của bạn được bảo vệ chắc chắn hơn, bảo vệ khớp gối của bạn 1 cách tối đa trong các bài tập Squat, Deadlift và các bài tập chân với máy khác.',
                'category_id' => '6',
                'price' => 200000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585116044/quan_goi_beast_max_strength_image_catalog_1562488496_trwrbm.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Găng tay Habinger',
                'description' => 'Hàng nhập khẩu, chất lượng tốt. Dễ dàng sử dụng và đem lại cảm giác thoải mái nhất cho bạn. Chất liệu tốt, độ bền cao sẽ làm hài lòng bạn.',
                'category_id' => '6',
                'price' => 250000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585116167/g_ng-tay-tap-gym-women-flexfit-white_yaednx.jpg',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
            [
                'name' => 'Đai lưng mềm Harbinger',
                'description' => 'Đai lưng mềm Harbinger mang lại cảm giác thoải mái dễ chịu khi sử dụng, hỗ trợ đắc lực cho bài tập liên quan đến lưng và cột sống, giúp bảo vệ lưng, cột sống khi nâng tạ.',
                'category_id' => '6',
                'price' => 500000,
                'discount' => 0,
                'brand_id' => '10',
                'images' => 'https://res.cloudinary.com/dzbi63fko/image/upload/v1585116278/harbinger-dai-lung_365_r7yvil.png',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ],
        ]);
    }
}
