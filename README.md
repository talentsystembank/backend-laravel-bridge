# Laravel Bridge

Gói này nhằm polyfill các namespace để tích hợp với các framework

Gói này chỉ nhằm mục đích development, không thực sự tích hợp vào các project

Ví dụ, trong Laravel, để sử dụng tính chất đa hình, hệ thống mặc địch khởi tạo `App\Models\User` để thực hiện
authentication. Vì vậy nên polyfill để tránh lỗi khi code