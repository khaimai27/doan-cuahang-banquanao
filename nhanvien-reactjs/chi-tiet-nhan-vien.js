import ThanhHeader from '../header';
import { useEffect } from 'react';
import { useState } from 'react';
import { Link } from 'react-router-dom';
function NhanVienCT(props) {
    const [CTTaiKhoanNhanVien,setctTaiKhoanNhanVien]=useState([])

    useEffect(()=>{
      async function getDatFromAPI(){
        var response = await fetch('http://127.0.0.1:8000/api/nhanvien/chi-tiet');
        var json=await response.json();
        setctTaiKhoanNhanVien(json.data);
      }
      getDatFromAPI();
    },[]);
        return (
        <>
        <ThanhHeader/>
        <div className="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 className="h2">Chi tiết Nhân Viên</h1>
      <div className="btn-toolbar mb-2 mb-md-0">
      </div>
    </div>
        
        <div className="container py-5">
        <div className="row">
          <div className="col-lg-4">
            <div className="card mb-4" style={{ width: 600, background: 'smoke', left: 400 }}>
              <div className="card-body text-center">
                <div className="card mb-4" style={{ color: 'green' }}>
                  <div className="card-body">
                    <div className="row">
                      <div className="col-sm-3">
                        <p className="mb-0">Tên :</p>
                      </div>
                      <div className="col-sm-9">
                        <p style={{ color: 'blue' }}><p2>{CTTaiKhoanNhanVien.ten}</p2></p>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-sm-3">
                        <p className="mb-0">UserName :</p>
                      </div>
                      <div className="col-sm-9">
                        <p style={{ color: 'blue' }}><p2>{CTTaiKhoanNhanVien.account}</p2></p>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-sm-3">
                        <p className="mb-0">Password :</p>
                      </div>
                      <div className="col-sm-9">
                        <p style={{ color: 'blue' }}><p2>{CTTaiKhoanNhanVien.password}</p2></p>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-sm-3">
                        <p className="mb-0">Số Điện Thoại :</p>
                      </div>
                      <div className="col-sm-9">
                        <p style={{ color: 'blue' }}><p2>{CTTaiKhoanNhanVien.so_dien_thoai}</p2></p>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-sm-3">
                        <p className="mb-0">Địa Chỉ :</p>
                      </div>
                      <div className="col-sm-9">
                        <p style={{ color: 'blue' }}><p2>{CTTaiKhoanNhanVien.dia_chi}</p2></p>
                      </div>
                    </div>
                    <div className="row">
                      <div className="col-sm-3">
                        <p className="mb-0">Email :</p>
                      </div>
                      <div className="col-sm-9">
                        <p style={{ color: 'blue' }}><p2>{CTTaiKhoanNhanVien.email}</p2></p>
                      </div>
                    </div>
                    <hr />
                    {/* Continue rendering other employee details similarly */}
                  </div>
                </div>
                <Link to="/ds-tai-khoan-nhan-vien" className="btn btn-primary" onClick={() => window.location.href = "/ds-tai-khoan-nhan-vien"}>Quay lại</Link>
                <Link to="/sua-thong-tin-nhan-vien" className="btn btn-primary" onClick={() => window.location.href = "/sua-thong-tin-nhan-vien"}>Sửa Thông Tin Tài Khoản</Link>
              </div>
            </div>
          </div>
        </div>
      </div>
        </>
    );
}

export default NhanVienCT;






