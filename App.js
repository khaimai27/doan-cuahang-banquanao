import NhanVienCT from './components/nhanvien/chi-tiet-nhan-vien';
import SuaTTNV from './components/nhanvien/sua-thong-tin-nhan-vien';
import './App.css';
import Signin from './components/pages/dang-ky';
import Login from './components/pages/login';
import { Routes,Route} from 'react-router-dom';
import Footer from './components/footer';
import CTKhachHang from './components/khachhang/chi-tiet-khach-hang';
import SuaTTKH from './components/khachhang/sua-thong-tin-khach-hang';
import HomePage from './components/trang-chu';
import 'C:/xampp/htdocs/DA-BAnQUanAo/React-Ban-Quan-Ao/react-app/src/bootstrap-5.3.2/css/bootstrap.min.css'
function App() {
  return (
    <>
      <Routes>
        <Route path="/" element={<HomePage/>}/>
        <Route path="/login" element={<Login/>}/>
        <Route path="/chi-tiet-nhan-vien" element={<NhanVienCT/>}/>
        <Route path="/sua-thong-tin-nhan-vien" element={<SuaTTNV/>}/>
        <Route path="/dang-ky" element={<Signin/>}/>
        <Route path="/chi-tiet-khach-hang" element={<CTKhachHang/>}/>
        <Route path="/sua-thong-tin-khach-hang" element={<SuaTTKH/>}/>
      </Routes>
      <Footer/>
    </>
  );
}

export default App;
