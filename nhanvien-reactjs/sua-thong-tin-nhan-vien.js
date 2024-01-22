import NhanVienCT from './chi-tiet-nhan-vien';
import { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import Header from '../header';
function SuaTTNV(props) {
  const [CTTaiKhoanNhanVien, setCTTaiKhoanNhanVien] = useState({
    ten: '',
    account: '',
    password: '',
    so_dien_thoai: '',
    dia_chi: '',
    email: '',
  });

  useEffect(() => {
  }, []);

  const handleChange = (e) => {
    setCTTaiKhoanNhanVien({ ...CTTaiKhoanNhanVien, [e.target.name]: e.target.value });
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    try {
      const response = await fetch('http://127.0.0.1:8000/api/nhanvien/cap-nhat/13', {
        method: 'PUT',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(CTTaiKhoanNhanVien),
      });

      if (response.ok) {

        console.log('Data updated successfully!');

      } else {

        throw new Error('Network response was not ok');
      }
    } catch (error) {
      console.error('Error:', error);
    }
  };

  return (
    <div>
    <Header/>
    <form onSubmit={handleSubmit}>
    <div className="container py-5">
        <div className="row">
          <div className="col-lg-4">
            <div className="card mb-4" style={{ width: 600, background: 'smoke', left: 400 }}>
              <div className="card-body text-center position-relative">
                <h4 className="card-title text-center">Chi tiết Nhân Viên</h4>
                <div className="card mb-4" style={{ color: 'green' }}>
                  <div className="card-body">
                    <div className="row" htmlFor="ten">
                      <div className="col-sm-3" >
                        <p className="mb-0" >Tên:</p>
                      </div>
                      <div className="col-sm-9">
                        <input
   
                            type="text"
                            className="form-control"
                            id="ten"
                            value={CTTaiKhoanNhanVien.ten}
                            name="ten"
                            onChange={handleChange} 
                        />
                      </div>
                    </div>
                    <hr />
                    <div className="row">
                      <div className="col-sm-3" htmlFor="account">
                        <p className="mb-0" >UserName:</p>
                      </div>
                      <div className="col-sm-9">
                        <input
                        type="text"
                        className="form-control"
                        id="account"
                        value={CTTaiKhoanNhanVien.account}
                        name="account"
                        onChange={handleChange}
                        />
                      </div>
                    </div>
                    <hr />
                    <div className="row">
                      <div className="col-sm-3" htmlFor="password">
                        <p className="mb-0" >Password:</p>
                      </div>
                      <div className="col-sm-9">
                        <input
                        type="text"
                        className="form-control"
                        id="password"
                        value={CTTaiKhoanNhanVien.password}
                        name="password"
                        onChange={handleChange}
                        />
                      </div>
                    </div>
                    <hr />
                    <div className="row">
                      <div className="col-sm-3" htmlFor="so_dien_thoai">
                        <p className="mb-0" >Số Điện Thoại:</p>
                      </div>
                      <div className="col-sm-9">
                        <input
                        type="text"
                        className="form-control"
                        id="so_dien_thoai"
                        value={CTTaiKhoanNhanVien.so_dien_thoai}
                        name="so_dien_thoai"
                        onChange={handleChange}
                        />
                      </div>
                    </div>
                    <hr />
                    <div className="row">
                      <div className="col-sm-3" htmlFor="dia_chi">
                        <p className="mb-0" >Địa Chỉ:</p>
                      </div>
                      <div className="col-sm-9">
                        <input
                        type="text"
                        className="form-control"
                        id="dia_chi"
                        value={CTTaiKhoanNhanVien.dia_chi}
                        name="dia_chi"
                        onChange={handleChange}
                        />
                      </div>
                    </div>
                    <hr />
                    <div className="row">
                      <div className="col-sm-3" htmlFor="email">
                        <p className="mb-0" >Email:</p>
                      </div>
                      <div className="col-sm-9">
                        <input
                        type="text"
                        className="form-control"
                        id="email"
                        value={CTTaiKhoanNhanVien.email}
                        name="email"
                        onChange={handleChange}
                        />
                      </div>
                    </div>
    
                  </div>
                </div>
                <button type="submit" className="btn3 btn-primary">Cập nhật</button>
                <Link to="/chi-tiet-nhan-vien" className="btn btn-primary">Quay lại</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      {CTTaiKhoanNhanVien.length > 0 && <NhanVienCT data={CTTaiKhoanNhanVien} />}
      {/* ... Success message or error handling */}
    </div>
  );
}

export default SuaTTNV;
