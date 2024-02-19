// ProfileComponent.jsx

import React from 'react';
import NhanVien from '../khachhang/khach-hang';

const ProfileComponent = ({ props}) => {
  return (
    <div>
      <h2>Thông tin tài khoản</h2>
      <NhanVien ten={props.member.ten} />
      <NhanVien ten={props.member.account} />
    </div>
  );
};

export default ProfileComponent;
