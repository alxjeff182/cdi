<template>
  <div class="container fixed-bottom bg-primary py-2 mt-5" style="max-width: 480px;">
    <div class="row">
      <div class="col-12 text-right">
        <div class="row">
          <div class="col-4"></div>
          <div class="col-4 text-center">
            <radial-menu
              style="position:absolute;
margin: auto; background-color: white
    position: absolute;top:-2rem;
    left: 2rem;"
              :itemSize="50"
              :radius="90"
              :angle-restriction="180"
            >
              <radial-menu-item
                v-for="(item, index) in items"
                :key="index"
                style="background-color: white"
              >
                <router-link :to="'/dashboard/'+item.route+''">
                  <img width="30px" :src="'/img/icon/'+item.image+'.png'" alt />
                </router-link>
              </radial-menu-item>
            </radial-menu>
          </div>
          <div class="col-4 text-right">
            <img width="30px" src="/img/icon/cog.png" alt />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import { RadialMenu, RadialMenuItem } from "vue-radial-menu";

export default {
  data() {
    if (this.$gate.isAdmin()) {
      return {
        items: [
          {
            route: "manage-user",
            image: "admin-user"
          },
          {
            route: "manage-location",
            image: "admin-location"
          },
          {
            route: "manage-task",
            image: "admin-task"
          },
          {
            route: "penagihan",
            image: "penagihan"
          },
          {
            route: "admin-message",
            image: "admin-message"
          }
        ]
      };
    }

    if (this.$gate.isCleaner()) {
      return {
        items: [
          {
            route: "location",
            image: "location"
          },
          {
            route: "job",
            image: "job"
          },
          {
            route: "message",
            image: "message"
          },
          {
            route: "report",
            image: "report"
          }
        ]
      };
    }

    if (this.$gate.isCustomer()) {
      return {
        items: [
          {
            route: "location-list",
            image: "task-list"
          },
          {
            route: "customer-message",
            image: "customer-message"
          },
          {
            route: "cs-report",
            image: "cs-report"
          }
        ]
      };
    }
  }
};
</script> 