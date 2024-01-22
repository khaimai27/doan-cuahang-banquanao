import KhachHangTen from "./khach-hang-ten";
import KhachHangEmail from "./email-khach-hang";
import KhachHangPassword from "./khach-hang-password";
import KhachHangSDT from "./khach-hang-sdt";
import DiaChiKhachHang from "./dia-chi-khach-hang";
import KhachHangUserName from "./khach-hang-username";
import { NavLink } from "react-router-dom";
function NhanVien(props) {
    return (
      
      <div className="wrapper">
        <KhachHangTen ten={props.member.ten} />
        <KhachHangUserName account={props.member.account} />
        <KhachHangPassword password={props.member.password}/>
        <KhachHangSDT so_dien_thoai={props.member.so_dien_thoai}/>
        <DiaChiKhachHang dia_chi={props.member.dia_chi}/>
        <KhachHangEmail email={props.member.email}/>
        <NavLink to="/chi-tiet-khach-hang"><button className="re-imformation">Chi tiết khách hàng</button></NavLink>
        <NavLink to="/sua-thong-tin-khach-hang"><button className="re-imformation">Sửa thông tin khách hàng</button></NavLink>
        <hr></hr>
      </div>
    );
}

export default NhanVien;
   // <NavLink to="/giohang"><button className="buttonsale">Thêm Vào Giỏ Hàng</button></NavLink>