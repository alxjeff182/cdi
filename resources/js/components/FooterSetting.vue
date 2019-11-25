<template>
  <div class="container fixed-bottom bg-primary py-2 mt-5" style="max-width: 480px;">
    <div class="row">
      <div class="col-12 text-right">
        <div class="row">
          <div class="col-4">
            <button @click="$router.go(-1)" class="text-white btn btn-outline-info btn-block">back</button>
          </div>
          <div class="col-4 text-center">
            <radial-menu
              style="position:absolute;
margin: auto; background-color: white
    position: absolute;top:-2rem;
    left: 4.5rem;
    box-shadow: 0 2px 15px 0 rgba(0,0,0,0.3);border: 1.5px solid #2196f3;
    display: inline-table;"
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
            <router-link to="/dashboard">
              <img width="30px" src="/img/icon/cog.png" alt />
            </router-link>
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
            image: "manage-user"
          },
          {
            route: "manage-location",
            image: "manage-location"
          },
          {
            route: "manage-task",
            image: "manage-task"
          },
          {
            route: "manage-assignment",
            image: "manage-assignment"
          },
          {
            route: "manage-invoice",
            image: "manage-invoice"
          },
          {
            route: "manage-message",
            image: "manage-message"
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
            route: "customer-location",
            image: "location"
          },
          {
            route: "customer-task",
            image: "job"
          },
          {
            route: "customer-report",
            image: "user-report"
          },
          {
            route: "customer-invoice",
            image: "customer-invoice"
          },
          {
            route: "customer-message",
            image: "message"
          }
        ]
      };
    }
  }
};
</script> 