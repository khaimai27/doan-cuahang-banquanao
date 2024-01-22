// ProfileComponent.jsx

import React from 'react';

const ProfileComponent = ({ userInfo }) => {
  return (
    <div>
      <h2>Thông tin tài khoản</h2>
      <p>Username: {userInfo.account}</p>
      <p>password: {userInfo.password}</p>
    </div>
  );
};

export default ProfileComponent;
