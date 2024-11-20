@extends('layouts.app')
@section('title', 'Quyền lợi và nghĩa vụ')
@section('title-sidebar', 'Giới thiệu')
@section('sidebar-menu')
    <li><a href="{{ route('gioithieumangluoi') }}">Giới thiệu mạng lưới</a></li>
    <li><a href="{{ route('bandieuhanh') }}">Ban điều hành</a></li>
    <li><a href="{{ route('quyenloivanghiavu') }}">Quyền lợi và nghĩa vụ</a></li>
@endsection
@section('content')
<h2>Quyền Lợi của Cựu Sinh Viên</h2>
        <ul>
            <li>
                <strong>Kết Nối và Mở Rộng Mạng Lưới Quan Hệ</strong>
                <p>Cựu sinh viên có quyền kết nối với các đồng nghiệp, các thế hệ sinh viên, và các chuyên gia trong ngành. Điều này giúp xây dựng mối quan hệ nghề nghiệp mạnh mẽ.</p>
                <p class="example">Ví dụ: Tham gia các buổi networking hoặc hội thảo chuyên đề, nơi bạn có thể gặp gỡ những người có cùng chuyên môn, hoặc những người có thể giúp đỡ bạn trong sự nghiệp.</p>
            </li>
            <li>
                <strong>Tham Gia Các Sự Kiện Đặc Biệt</strong>
                <p>Các thành viên có quyền tham gia vào các sự kiện như hội nghị, hội thảo, lớp học đào tạo, buổi gặp mặt cựu sinh viên, hoặc các sự kiện thể thao do trường tổ chức.</p>
                <p class="example">Ví dụ: Tham gia vào các sự kiện hàng năm của Mạng lưới Cựu Sinh Viên như lễ hội, gala dinner, hoặc các buổi trao đổi nghề nghiệp.</p>
            </li>
            <li>
                <strong>Tiếp Cận Cơ Hội Việc Làm</strong>
                <p>Mạng lưới Cựu Sinh Viên thường cung cấp các cơ hội việc làm qua các mối quan hệ và đối tác của trường.</p>
                <p class="example">Ví dụ: Mạng lưới có thể chia sẻ các thông báo tuyển dụng từ các công ty đối tác, tạo điều kiện cho bạn dễ dàng tìm kiếm việc làm.</p>
            </li>
            <li>
                <strong>Cập Nhật Các Thông Tin Quan Trọng</strong>
                <p>Các thành viên sẽ được thông báo về các hoạt động, sự kiện, thay đổi quan trọng từ trường học, các khóa học, cũng như các thông báo liên quan đến cộng đồng.</p>
                <p class="example">Ví dụ: Nhận các bản tin hàng tháng về các sự kiện mới, chương trình học bổng, hoặc các dự án đặc biệt của trường.</p>
            </li>
            <li>
                <strong>Cơ Hội Được Vinh Danh</strong>
                <p>Cựu sinh viên có thể nhận được sự vinh danh vì thành tích xuất sắc trong công việc, trong cộng đồng, hoặc vì những đóng góp nổi bật cho Mạng lưới Cựu Sinh Viên.</p>
                <p class="example">Ví dụ: Được tôn vinh trong các sự kiện hoặc trên website của Mạng lưới Cựu Sinh Viên nhờ thành tích nghề nghiệp hoặc đóng góp tích cực vào cộng đồng.</p>
            </li>
            <li>
                <strong>Hưởng Lợi Từ Các Chương Trình Đào Tạo và Phát Triển</strong>
                <p>Các cựu sinh viên có thể tham gia vào các chương trình đào tạo, các khóa học nâng cao kỹ năng nghề nghiệp hoặc các hoạt động phát triển cá nhân do trường hoặc Mạng lưới tổ chức.</p>
                <p class="example">Ví dụ: Tham gia các khóa học trực tuyến về quản lý, lãnh đạo, hoặc các chứng chỉ nghề nghiệp giúp cải thiện khả năng công việc.</p>
            </li>
        </ul>
    </section>

    <section>
        <h2>Nghĩa Vụ của Cựu Sinh Viên</h2>
        <ul>
            <li>
                <strong>Duy Trì Mối Quan Hệ và Gắn Kết</strong>
                <p>Các thành viên có trách nhiệm duy trì mối quan hệ với mạng lưới cựu sinh viên và tham gia vào các sự kiện, hoạt động cộng đồng.</p>
                <p class="example">Ví dụ: Tham gia các cuộc họp định kỳ, các cuộc hội thảo, hoặc các sự kiện chia sẻ kinh nghiệm.</p>
            </li>
            <li>
                <strong>Đóng Góp Về Tài Chính và Tham Gia Các Hoạt Động Tình Nguyện</strong>
                <p>Các thành viên có thể đóng góp tài chính cho các quỹ học bổng, các dự án hỗ trợ sinh viên hiện tại, hoặc tài trợ cho các sự kiện.</p>
                <p class="example">Ví dụ: Cung cấp học bổng cho sinh viên nghèo, tham gia hỗ trợ tổ chức sự kiện cho sinh viên, hoặc hướng dẫn các sinh viên trong việc phát triển nghề nghiệp.</p>
            </li>
            <li>
                <strong>Chia Sẻ Kinh Nghiệm và Hỗ Trợ Các Thế Hệ Sinh Viên Mới</strong>
                <p>Cựu sinh viên có trách nhiệm chia sẻ kinh nghiệm về nghề nghiệp, kỹ năng mềm, và các chiến lược thành công với sinh viên hiện tại.</p>
                <p class="example">Ví dụ: Tham gia các buổi chia sẻ, hội thảo hướng nghiệp, hoặc chương trình mentor-mentee (người cố vấn và người được cố vấn) để giúp sinh viên xây dựng sự nghiệp.</p>
            </li>
            <li>
                <strong>Tuân Thủ Nội Quy và Quy Định Cộng Đồng</strong>
                <p>Các thành viên cần tuân thủ các quy định về hành vi, đạo đức nghề nghiệp và sự tôn trọng trong mọi hoạt động của mạng lưới.</p>
                <p class="example">Ví dụ: Tuân thủ các quy tắc ứng xử trong các sự kiện, duy trì thái độ tích cực trong các cuộc thảo luận hoặc cuộc gặp mặt.</p>
            </li>
            <li>
                <strong>Đại Diện Cộng Đồng Cựu Sinh Viên</strong>
                <p>Mỗi cựu sinh viên là đại diện của cộng đồng và cần duy trì hình ảnh tích cực của mạng lưới cựu sinh viên trong mọi hoạt động.</p>
                <p class="example">Ví dụ: Khi tham gia các sự kiện công cộng, bạn cần thể hiện sự chuyên nghiệp và tôn trọng đối với trường và mạng lưới cựu sinh viên.</p>
            </li>
            <li>
                <strong>Hỗ Trợ Các Chương Trình Phát Triển Sinh Viên Hiện Tại</strong>
                <p>Các cựu sinh viên có trách nhiệm đóng góp vào các chương trình phát triển sinh viên, từ đó tạo điều kiện cho thế hệ sau có cơ hội học hỏi và trưởng thành.</p>
                <p class="example">Ví dụ: Cung cấp các cơ hội thực tập, tuyển dụng, hoặc tài trợ cho các hoạt động học thuật của sinh viên.</p>
            </li>
        </ul>
   @endsection        