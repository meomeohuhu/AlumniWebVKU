@extends('layouts.app')
@section('title', 'Mạng lưới')
@section('title-sidebar', 'Mạng lưới')
@section('sidebar-menu')
    <li><a href="#">Câu lạc bộ</a></li>
    <li><a href="#">Ban liên lạc các Ngành</a></li>
@endsection
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }
    
    body {
        background-color: #f3f6fb;
        color: #333;
        padding: 20px;
        font-size: 16px;
    }
    
    .container {
        max-width: 900px;
        margin: 0 auto;
        background-color: white;
        padding: 30px;
       
    }
    
    h1 {
        font-size: 28px;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }
    
    .subtitle {
        font-size: 18px;
        color: #777;
        margin-bottom: 25px;
        text-align: center;
    }
    
    .club-info {
        display: flex;
        gap: 30px;
        margin-top: 30px;
    }
    
    .left, .right {
        flex: 1;
        background-color: #fafafa;
        padding: 30px;
        border-radius: 8px;
        position: relative;
        text-align: center;
        padding-top: 90px; /* Add more space for logo */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05); /* Soft shadow */
    }
  
    .logo {
        position: absolute;
        top: -45px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background-color: white;
        padding: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  
    /* Styling for text in both left and right */
    .left p, .right p {
        font-size: 16px;
        line-height: 1.8;
        margin-top: 15px;
        color: #555;
        margin-bottom: 15px; /* Add margin between paragraphs */
    }
  
    .right p {
        font-weight: bold;
    }
  
    .join-button {
        background-color: #d32f2f;
        color: white;
        border: none;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: 20px auto;
        text-transform: uppercase; /* Makes text uppercase */
        letter-spacing: 1px; /* Adds a little spacing between letters */
        transition: background-color 0.3s ease;
    }
    
    .join-button:hover {
        background-color: #b71c1c;
    }
  
    .mission {
        margin-top: 50px;
        background-color: #fafafa;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }
    
    .mission h2 {
        font-size: 22px;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .mission ul {
        list-style-type: disc;
        padding-left: 25px;
    }
    
    .mission li {
        margin-bottom: 15px;
        font-size: 16px;
        color: #555;
    }
  
    /* Responsive design for small screens */
    @media (max-width: 768px) {
        .club-info {
            flex-direction: column;
            align-items: center;
        }
  
        .left, .right {
            width: 100%;
            padding-top: 80px; /* Adjust padding for small screens */
        }
  
        .join-button {
            font-size: 16px;
            padding: 10px 20px;
        }
    }
  </style>
  
  <body>
      <div class="container">
          <h1>Câu lạc bộ: Tennis Cựu sinh viên</h1>
          <p class="subtitle">Ngày thành lập: Chưa có</p>
  
          <div class="club-info">
              <div class="left">
                  <img src="https://via.placeholder.com/100" alt="HUST Alumni Logo" class="logo">
                  <p><strong>Chủ tịch:</strong> Phan Văn Đạt</p>
                  <p><strong>Sđt:</strong> 0852747318</p>
                  <p><strong>Email:</strong> datpv.23it@vku.udn.vn</p>
                  <p><strong>Địa chỉ:</strong> số 16, Lê Trung Đình, Hào hải, NHS, ĐN</p>
              </div>
              <div class="right">
                  <!-- New logo for the right section -->
                  <img src="https://via.placeholder.com/100" alt="Right Logo" class="logo">
                  <p><strong>Đăng ký tham gia Tennis Cựu sinh viên</strong></p>
                  <p>Thành viên: 4</p>
                  <p>Ngày thành lập: Chưa có</p>
                  <button class="join-button">Tham gia ngay</button>
              </div>
          </div>
  
          <div class="mission">
              <h2>Tôn chỉ, mục đích</h2>
              <ul>
                  <li>Câu lạc bộ là một tổ chức quy tụ những Cựu sinh viên VKU, đam mê và yêu thích môn thể thao tennis, hoạt động theo nguyên tắc tự nguyện, bình đẳng với mục tiêu: Vì sức khỏe, đoàn kết, gắn bó, kết nối, thành công, đồng tâm hướng về VKU.</li>
                  <li>CLB là một tổ chức nằm trong mạng lưới Cựu sinh viên VKU.</li>
              </ul>
          </div>
      </div>
  </body>
@endsection
