import React, { useState } from 'react';
function Signin() {
  async function addDataToServer(data) {
    try {
      const response = await fetch('http://127.0.0.1:8000/api/khachhang/dang-ky', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          // Các headers khác nếu cần thiết
        },
        body: JSON.stringify(data),
      });
  
      if (response.ok) {
        // Xử lý khi thêm dữ liệu thành công
        console.log('Dữ liệu đã được thêm thành công!');
      } else {
        // Xử lý khi có lỗi từ máy chủ
        console.error('Lỗi khi thêm dữ liệu:', response.statusText);
      }
    } catch (error) {
      // Xử lý khi có lỗi không mong muốn
      console.error('Lỗi không mong muốn:', error.message);
    }
  }
  const [newData, setNewData] = useState({
  ten:"",
  account:"",
  password:"",
  so_dien_thoai:"",
  dia_chi:"",
  email:"",
  });

  // Các hàm xử lý sự kiện
  const handleChange = (e) => {
    // Xử lý thay đổi giá trị của trường dữ liệu mới
    setNewData({
      ...newData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = (e) => {
    e.preventDefault();

    // Gọi hàm để thực hiện việc thêm dữ liệu
    addDataToServer(newData);
  };
  
  return (
    <><script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
  ></script>
    <form className="vh-100" style={{ backgroundColor: '#508bfc' }} onSubmit={handleSubmit}>
    <div className="container py-5 h-100">
      <div className="row d-flex justify-content-center align-items-center h-100">
        <div className="col-12 col-md-8 col-lg-6 col-xl-5">
          <div className="card shadow-2-strong" style={{ borderRadius: '1rem' }}>
            <div className="card-body p-5 text-center">
              <h3 className="mb-5">Đăng Ký</h3>
              <div className="form-outline mb-4">
                <input type="text" id="typeEmailX-2" className="form-control form-control-lg" name="ten"
                value={newData.ten || ''}
                onChange={handleChange}/>
                <label className="form-label" htmlFor="typeEmailX-2">Họ Tên</label>
              </div>
              <div className="form-outline mb-4">
                <input type="text" id="typeEmailX-2" className="form-control form-control-lg" name="account"
                value={newData.account || ''}
                onChange={handleChange}/>
                <label className="form-label" htmlFor="typeEmailX-2">UsrName</label>
              </div>
              <div className="form-outline mb-4">
                <input type="password" id="typePasswordX-2" className="form-control form-control-lg" name="password"
                value={newData.password || ''}
                onChange={handleChange}/>
                <label className="form-label" htmlFor="typePasswordX-2">Password</label>
              </div>
              <div className="form-outline mb-4">
                <input type="text" id="typeEmailX-2" className="form-control form-control-lg"
                name="so_dien_thoai"
                value={newData.so_dien_thoai || ''}
                onChange={handleChange}/>
                <label className="form-label" htmlFor="typeEmailX-2">Số Điện Thoại</label>
              </div>
              <div className="form-outline mb-4">
                <input type="text" id="typeEmailX-2" className="form-control form-control-lg"
                name="dia_chi"
                value={newData.dia_chi || ''}
                onChange={handleChange}/>
                <label className="form-label" htmlFor="typeEmailX-2">Địa Chỉ</label>
              </div>
              <div className="form-outline mb-4">
                <input type="text" id="typeEmailX-2" className="form-control form-control-lg"
                name="email"
                value={newData.email || ''}
                onChange={handleChange}/>
                <label className="form-label" htmlFor="typeEmailX-2">Email</label>
              </div>
              {/* Checkbox */}
              <div className="form-check d-flex justify-content-start mb-4">
                <input className="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label className="form-check-label" htmlFor="form1Example3">Nhớ thông tin tài khoản</label>
              </div>

              <button className="btn btn-primary btn-lg btn-block" type="submit">Đăng Ký</button>

              <hr className="my-4" />

              <button className="btn btn-lg btn-block btn-primary" style={{ backgroundColor: '#dd4b39' }} type="submit">
                <i className="fab fa-google me-2"></i> Sign in with google
              </button>
              <button className="btn btn-lg btn-block btn-primary mb-2" style={{ backgroundColor: '#3b5998' }} type="submit">
                <i className="fab fa-facebook-f me-2"></i> Sign in with facebook
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>

<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
  </>
  );
}
export default Signin;