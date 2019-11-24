<template>
  <div>
    <admin-content v-if="$gate.isAdmin()"></admin-content>
    <cleaner-content v-if="$gate.isCleaner()"></cleaner-content>
    <customer-content v-if="$gate.isCustomer()"></customer-content>
  </div>
</template>
