// document.addEventListener('DOMContentLoaded', function() {
//     const aboutMenu = document.querySelector('#about-menu');
//     const newsMenu = document.querySelector('#news-menu');
//     const eventsMenu = document.querySelector('#events-menu');
//     const networkMenu = document.querySelector('#network-menu');
//     const jobsMenu = document.querySelector('#jobs-menu');

//     const sidebarTitle = document.querySelector('#sidebar-title');
//     const sidebarMenu = document.querySelector('#sidebar-menu');

//     const content = {
//         about: {
//             title: "Giới thiệu",
//             items: [
//                 { text: "Giới thiệu mạng lưới", link: "/gioithieumangluoi" },
//                 { text: "Ban điều hành", link: "/bandieuhanh" },
//                 { text: "Quyền lợi và nghĩa vụ", link: "/quyenloivanghiavu" }
//             ]
//         },
//         news: {
//             title: "Tin tức",
//             items: [
//                 { text: "Thông báo", link: "/thong-bao" },
//                 { text: "Hoạt động", link: "/hoat-dong" },
//                 { text: "Vinh danh", link: "/vinh-danh" }
//             ]
//         },
//         events: {
//             title: "Sự kiện",
//             items: [
//                 { text: "Sắp tới", link: "/sap-toi" },
//                 { text: "Đang diễn ra", link: "/dang-dien-ra" },
//                 { text: "Đã kết thúc", link: "/da-ket-thuc" }
//             ]
//         },
//         network: {
//             title: "Mạng lưới",
//             items: [
//                 { text: "Câu lạc bộ", link: "/cau-lac-bo" },
//                 { text: "Ban liên lạc các Ngành", link: "/ban-lien-lac" }
//             ]
//         },
//         jobs: {
//             title: "Cơ hội việc làm",
//             items: [
//                 { text: "Giới thiệu việc làm", link: "/gioi-thieu-viec-lam" },
//                 { text: "Tuyển dụng", link: "/tuyen-dung" },
//                 { text: "Đối tác", link: "/doi-tac" }
//             ]
//         }
//     };

//     function changeSidebarContent(menuType) {
//         const { title, items } = content[menuType];
        
//         sidebarTitle.textContent = title;

//         sidebarMenu.innerHTML = '';
//         items.forEach(item => {
//             const li = document.createElement('li');
//             li.innerHTML = `<a href="${item.link}">${item.text}</a>`;
//             sidebarMenu.appendChild(li);
//         });
//     }

//     aboutMenu.addEventListener('click', function(event) {
//         event.preventDefault();
//         changeSidebarContent('about');
//     });

//     newsMenu.addEventListener('click', function(event) {
//         event.preventDefault();
//         changeSidebarContent('news');
//     });

//     eventsMenu.addEventListener('click', function(event) {
//         event.preventDefault();
//         changeSidebarContent('events');
//     });

//     networkMenu.addEventListener('click', function(event) {
//         event.preventDefault();
//         changeSidebarContent('network');
//     });

//     jobsMenu.addEventListener('click', function(event) {
//         event.preventDefault();
//         changeSidebarContent('jobs');
//     });
// });
function toggleDropdown() {
    const dropdownMenu = document.getElementById('userDropdown');
    dropdownMenu.classList.toggle('show');
}

// Đóng dropdown khi nhấn ra ngoài
window.onclick = function (event) {
    if (!event.target.matches('.dropdown-toggle')) {
        const dropdowns = document.getElementsByClassName('menu-items');
        for (let i = 0; i < dropdowns.length; i++) {
            if (dropdowns[i].classList.contains('show')) {
                dropdowns[i].classList.remove('show');
            }
        }
    }
};
