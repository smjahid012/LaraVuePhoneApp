<template>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="http://smjahidpro.com">
        <img
          src="https://smjahidpro.com/wp-content/uploads/2018/05/smlogo-1.png"
          alt="SM Jahid Logo"
          width="112"
          height="28"
        >
      </a>
      <div class="navbar-menu is-active">
        <router-link to="/home" class="navbar-item">Home</router-link>
        <router-link to="/about" class="navbar-item">About</router-link>
      </div>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  </nav>
</template>
