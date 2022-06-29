<template>
  <div>
    <div class="card">
      <div class="card-header">Find Doctors By Departments</div>
      <div class="card-body">
        <div class="selection-wrapper">
          <div @click="isDoctors = !isDoctors">
            {{ selectedDepartmentName }}
          </div>
          <div class="doctors-wrapper" v-if="isDoctors">
            <div
              class="doctor"
              v-for="(dep, index) in departments"
              :key="index"
              @click="selectaDoctor(doctor)"
            >
              {{ dep.name }}
            </div>
          </div>
        </div>

        <div class="text-center">
          <pulse-loader
            :loading="loading"
            :color="color"
            :size="size"
          ></pulse-loader>
        </div>
      </div>

      <div class="card mt-5" v-if="showDoctors">
        <div class="card-header">Departmens</div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Name</th>
                <th>ExpertiseExpertiseExpertiseExpertiseExpertise</th>
                <th>BookinBookinBookinBookinBooking</th>
              </tr>
            </thead>
            <tbody v-if="!loading">
              <tr v-for="(d, index) in doctors" :key="index">
                <th scope="row">{{ index + 1 }}</th>
                <td>
                  <img :src="'/images/' + d.doctor.image" width="80" />
                </td>
                <td>{{ d.doctor.name }}</td>
                <td>{{ d.doctor.department }}</td>
                <td>
                  <a :href="'/new-appointment/' + d.user_id + '/' + d.date"
                    ><button class="btn btn-success">
                      Book Appointment
                    </button></a
                  >
                </td>
              </tr>
              <td v-if="doctors.length == 0">
                No doctors available for {{ this.time }}
              </td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
import datepicker from "vuejs-datepicker";
import moment from "moment";
import PulseLoader from "vue-spinner/src/PulseLoader.vue";
export default {
  data() {
    return {
      time: "",
      departments: [],
      doctors: [],
      loading: false,
      selectedDepartment: null,
      selectedDepartmentName: "Choose a department",
      disabledDates: {
        to: new Date(Date.now() - 86400000),
      },
      size: "20px",
      color: "red",
      date: "2022-05-27",
      isDoctors: false,
    };
  },
  props: {
    showDate: {
      type: Boolean,
      default: true,
    },
    showDoctors: {
      type: Boolean,
      default: true,
    },
  },

  components: {
    datepicker,
    PulseLoader,
  },
  methods: {
    customDate(date) {
      this.loading = true;

      this.time = moment(date).format("YYYY-MM-DD");
      axios
        .post("/api/finddoctors", { date: this.time })
        .then((response) => {
          setTimeout(() => {
            this.doctors = response.data;
            this.loading = false;
          }, 1000);
        })
        .catch((error) => {
          alert("error");
        });
    },

    selectaDoctor(department) {
      this.selectedDepartment = department;
      this.selectedDepartmentName = department.name;
      this.isDoctors = false;

      getDoctorsByDepartment(department.id);
    },

    getDoctorsByDepartment(id) {
      this.loading = true;
      axios.get("/api/finddoctorsdepartment").then((response) => {
        console.log(response);
        this.doctors = response.data;
        this.loading = false;
      });
    },
  },
  mounted() {
    // let time = moment(date).parseZone("Europe/Istanbul");
    this.loading = true;
    axios.get("/api/finddoctorsdepartment").then((response) => {
      console.log(response);
      this.departments = response.data;
      this.loading = false;
    });
  },
};
</script>
<style scoped>
.my-datepicker >>> .my-datepicker_calendar {
  width: 100%;
  height: 330px;
  font-weight: bold;
}
.selection-wrapper {
  position: relative;
}
.doctors-wrapper {
  top: 40px;
  background: white;
  left: 0;
  position: absolute;
  display: flex;
  flex-direction: column;
  width: 100%;
  height: 400px;
  overflow-y: auto;
  overflow-x: hidden;
}
.doctor {
  display: grid;
  grid-template-columns: 80px auto;
  padding: 8px 12px;
}
</style>
