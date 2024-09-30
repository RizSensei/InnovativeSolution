<div class="px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-60 py-10">
          <!-- imis introduction -->
          <div class="py-5 lg:flex lg:flex-row-reverse gap-10">
            <div class="h-full w-full lg:w-1/2">
              <object
                type="image/svg+xml"
                data="/hello/public/images/imis/modules of imis.svg"
              ></object>
            </div>
            <div
              class="w-full lg:w-1/2 mt-5 flex flex-col justify-center items-center lg:items-start text-center lg:text-left space-y-5 md:space-y-7 lg:space-y-8"
            >
              <h1
                class="font-semibold 2xl:font-bold text-2xl lg:text-3xl text-blue leading-tight"
              >
                INTEGRATED MUNICIPAL INFORMATION SYSTEM
              </h1>
              <p
                class="text-sm 2xl:text-base text-light-black font-medium text-justify"
              >
                The Integrated Municipal Information System (IMIS) is a
                comprehensive digital platform that seamlessly merges web,
                mobile and GIS technologies, leveraging open-source software
                platforms. The innovative system offers a comprehensive solution
                for managing the entirety of a city’s information. IMIS stands
                as a holistic solution designed to manage the complete
                information of a city, empowering local governments in the
                planning, management, and monitoring & evaluation of sanitation
                systems and services with the aim of achieving SDG 6.2 through
                the Citywide Inclusive Sanitation (CWIS) approach.
              </p>
            </div>
          </div>

          <!-- imis map  -->
          <div class="py-5">
            <div
              id="map"
              style="width: 100%; height: 500px"
              class="-z-0 border border-gray-300 rounded-2xl overflow-hidden"
            ></div>
            <script>
              const locations = [
                {
                  lat: 28.5776,
                  lng: 81.6254,
                  city: "Birendranagar",
                  country: "Nepal",
                  stage: "Readiness Assessment",
                  year: 2021,
                },
                {
                  lat: 28.5776,
                  lng: 81.6254,
                  city: "Birendranagar",
                  country: "Nepal",
                  stage: "CWIS Planning",
                  year: 2021,
                },
                {
                  lat: 27.6427,
                  lng: 85.3705,
                  city: "Mahalaxmi",
                  country: "Nepal",
                  stage: "Operational",
                  year: 2022,
                },
                {
                  lat: 27.9772,
                  lng: 83.7677,
                  city: "Waling",
                  country: "Nepal",
                  stage: "Readiness Assessment",
                  year: 2023,
                },
                {
                  lat: 27.9772,
                  lng: 83.7677,
                  city: "Waling",
                  country: "Nepal",
                  stage: "CWIS Planning",
                  year: 2023,
                },
              ];

              // Creating a map object
              var map = new L.map("map", {
                center: [27.7172, 85.324],
                zoom: 6,
                minZoom: 3,
                maxZoom: 10,
                maxBounds: L.latLngBounds([
                  [-90, -170],
                  [90, 190],
                ]),
              });

              var tileLayer = L.tileLayer(
                "https://{s}.tile.openstreetmap.de/{z}/{x}/{y}.png",
                {
                  attribution: "© OpenStreetMap contributors",
                }
              ).addTo(map);

              const groupedLocations = {};
              locations.forEach((location) => {
                const key = `${location.lat},${location.lng}`;
                if (!groupedLocations[key]) {
                  groupedLocations[key] = [];
                }
                groupedLocations[key].push(location);
              });
              console.log(groupedLocations);

              // Create markers and bind popups
              Object.values(groupedLocations).forEach((locations) => {
                const marker = L.marker([locations[0].lat, locations[0].lng]);
                let popupContent = "";

                const getColorClass = (name) => {
                  switch (name) {
                    case "Readiness Assessment":
                      return "#2A629A";
                    case "CWIS Planning":
                      return "#68D2E8";
                    case "Under Development":
                      return "#FF7F3E";
                    case "Operational":
                      return "#FFDA78";
                    default:
                      return "#003285";
                  }
                };

                popupContent += `<p><span class="font-semibold">${locations[0].city}</span><br />`;

                locations.forEach((location) => {
                  popupContent += `<div class="flex gap-4 justify-between">
                      <div class="flex items-center justify-center gap-1">
                      <div class="h-2 w-2 rounded-full" style="background-color: ${getColorClass(
                        location.stage
                      )};"></div>
                    <h1 class="text-xs font-medium">${location.stage}</h1>
                    </div>
                    <h1 class="text-xs font-medium">${location.year}</h1>
                    </div>`;
                });

                popupContent += `</p>`;
                marker.bindPopup(popupContent).openPopup();
                marker.addTo(map);
              });
            </script>
          </div>

          <!--
        IMIS Footprints
      -->
          <div class="relative w-full h-80 md:h-96">
            <img
              src="https://images.pexels.com/photos/3183153/pexels-photo-3183153.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
              alt="Placeholder Image"
              class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div
              class="fade-in absolute inset-0 flex flex-col items-center justify-center"
            >
              <h1 class="text-white text-2xl font-semibold">IMIS Footprints</h1>
              <div
                id="fooprints-container"
                class="mt-5 md:mt-10 grid grid-cols-3 md:grid-cols-6 gap-5 text-[#226BBD]"
              >
                <script>
                  const footprints = [
                    {
                      name: "Countries",
                      count: "04",
                    },
                    {
                      name: "Cities",
                      count: "24",
                    },
                    {
                      name: "Readiness Assessment",
                      count: "10",
                    },
                    {
                      name: "CWIS Planning",
                      count: "10",
                    },
                    {
                      name: "Under Development",
                      count: "05",
                    },
                    {
                      name: "Operational",
                      count: "06",
                    },
                  ];

                  const footprintContainer = document.getElementById(
                    "fooprints-container"
                  );

                  const getColorClass = (name) => {
                    switch (name) {
                      case "Readiness Assessment":
                        return "#2A629A";
                      case "CWIS Planning":
                        return "#68D2E8";
                      case "Under Development":
                        return "#FF7F3E";
                      case "Operational":
                        return "#FFDA78";
                      default:
                        return "#003285";
                    }
                  };

                  const footprintDivs = footprints.map(
                    (footprint) => `
            <div class="flex flex-col text-center">
              <h1 class="text-3xl md:text-4xl font-semibold"  style="color: ${getColorClass(
                footprint.name
              )};">
                ${footprint.count}
              </h1>
              <h1 class="text-sm md:text-base font-semibold text-white">
                ${footprint.name}
              </h1>
            </div>
            `
                  );

                  footprintContainer.innerHTML = footprintDivs.join("");
                </script>
              </div>
            </div>
          </div>

          <!-- cwis introduction  -->
          <div class="h-full w-full">
            <div class="w-full h-full flex flex-col gap-5">
              <div class="w-full text-center">
                <h1
                  class="mt-5 font-semibold text-xl md:text-2xl text-[#1E2F5B] leading-tight"
                >
                  Citywide Inclusive Sanitation (CWIS)
                </h1>
              </div>
              <div class="w-full">
                <div class="h-full w-full">
                  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table
                      class="w-full text-sm text-left rtl:text-right text-black"
                    >
                      <thead
                        class="text-black uppercase bg-[#bdd7d1] font-bold"
                      >
                        <tr>
                          <th
                            scope="col"
                            class="px-2 py-3 border-r-2 border-white font-semibold"
                          >
                            CORE CWIS OUTCOMES
                          </th>
                          <th
                            scope="col"
                            class="px-3 py-1 border-r-2 border-b-2 border-white"
                          >
                            <h3 class="font-semibold">EQUITY</h3>
                            <div class="flex gap-0.5">
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Clean water and sanitation.png"
                                  alt="Clean Water and Sanitation"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Sustainable cities and communities.png"
                                  alt="Sustainable cities and communities"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Gender Equality.png"
                                  alt="Gender Equality"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Good Health and well-being.png"
                                  alt="Good Health and well-being"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                            </div>
                          </th>
                          <th
                            scope="col"
                            class="px-3 py-1 border-r-2 border-b-2 border-white"
                          >
                            <h3 class="font-semibold">SAFETY</h3>
                            <div class="flex gap-0.5">
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Clean water and sanitation.png"
                                  alt="Clean Water and Sanitation"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Good Health and well-being.png"
                                  alt="Good Health and well-being"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Sustainable cities and communities.png"
                                  alt="Sustainable cities and communities"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                            </div>
                          </th>
                          <th
                            scope="col"
                            class="px-3 py-1 border-b-2 border-white"
                          >
                            <h3 class="font-semibold">SUSTAINABILITY</h3>
                            <div class="flex gap-0.5">
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Clean water and sanitation.png"
                                  alt="Clean Water and Sanitation"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Climate Action.png"
                                  alt="Climate Action"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Good Health and well-being.png"
                                  alt="Good Health and well-being"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                              <div class="h-12 aspect-square bg-white">
                                <img
                                  src="/hello/public/images/imis/Global_goals/Sustainable cities and communities.png"
                                  alt="Sustainable cities and communities"
                                  class="h-full w-full object-contain"
                                />
                              </div>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr
                          class="font-medium border-b bg-[#bdd7d1] text-neutral-900 border-white"
                        >
                          <th
                            scope="row"
                            class="px-3 py-1 border-r-2 whitespace-nowrap border-white"
                          ></th>
                          <td class="px-3 py-1 border-r-2 border-white">
                            Services reflect fairness in distribution and
                            prioritization of service quality, prices,
                            deployment of public finance/subsidies
                          </td>
                          <td class="px-3 py-1 border-r-2 border-white">
                            Services safeguard customers, workers and
                            communities from safety and health risks by reaching
                            everyone with safe sanitation
                          </td>
                          <td class="px-3 py-1">
                            Services are reliably and continually delivered
                            based on effective management of human, financial
                            and natural resources
                          </td>
                        </tr>
                      </tbody>

                      <!-- second_________________ -->
                      <thead
                        class="text-black uppercase bg-[#e6efed] font-bold"
                      >
                        <tr>
                          <th
                            scope="col"
                            class="px-2 py-3 border-r-2 border-white font-semibold"
                          >
                            CORE CWIS FUNCTIONS
                          </th>
                          <th
                            scope="col"
                            class="px-3 py-1 border-r-2 border-b-2 border-white"
                          >
                            <h3 class="font-semibold">RESPONSIBILITY</h3>
                          </th>
                          <th
                            scope="col"
                            class="px-3 py-1 border-r-2 border-b-2 border-white"
                          >
                            <h3 class="font-semibold">ACCOUNTABILITY</h3>
                          </th>
                          <th
                            scope="col"
                            class="px-3 py-1 border-b-2 border-white"
                          >
                            <h3 class="font-semibold">
                              RESOURCE PLANNING AND MANAGEMENT
                            </h3>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr
                          class="font-medium border-b bg-[#e6efed] text-neutral-900 border-white"
                        >
                          <th
                            scope="row"
                            class="px-3 py-1 border-r-2 border-white whitespace-nowrap"
                          ></th>
                          <td class="px-3 py-1 border-r-2 border-white">
                            Authority(s) execute a clear public mandate to
                            ensure safe, equitable and sustainable, sanitation
                            services for all
                          </td>
                          <td class="px-3 py-1 border-r-2 border-white">
                            Authority's(ies') performance against its mandate is
                            monitored and managed with data, transparency, and
                            incentives
                          </td>
                          <td class="px-3 py-1">
                            Resources-human, financial, natural, assets-are
                            effectively managed to support execution of mandate
                            across time/space
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="w-full flex flex-col items-center justify-center">
                <p
                  class="text-sm 2xl:text-base text-light-black mt-2 text-justify"
                >
                  CWIS is an approach to achieve SDG 6.2 for safe, equitable and
                  financially viable sanitation systems and services. CWIS
                  ensures everyone in a city has access to safely managed
                  sanitation and human waste is safely managed along the whole
                  sanitation service chain ensuring protection of the
                  environment and human health.<br /><br />
                  CWIS approach focuses on service provision and its enabling
                  environment after than on building infrastructure, therefore,
                  reliable data is the key success factor for CWIS. UN Water SDG
                  6 global acceleration framework has also identified data and
                  information as one of the five accelerators of SDG 6 outcomes
                </p>
              </div>
            </div>
          </div>

          <!-- water & sdg  -->
          <div class="h-full w-full bg-blue mt-14">
            <div
              class="h-full py-10 px-10 lg:px-20 flex flex-col md:flex-row w-full gap-10 md:gap-20"
            >
              <div
                class="w-full md:w-1/2 flex flex-col items-start border-2 border-y-0 border-x-0 lg:border-r-white"
              >
                <h1
                  class="w-full text-xl md:text-2xl font-semibold text-white text-center md:text-start"
                >
                  Key Features
                </h1>
                <div class="mt-5 text-white text-sm 2xl:text-base font-light">
                  <div class="w-full">
                    <ul class="list-disc list-outside space-y-2 text-justify">
                      <li>
                        Spatial context for municipal data - infrastructure,
                        services, and resources.
                      </li>
                      <li>
                        Efficient storage and management of municipal data,
                        including infrastructure and essential services.
                      </li>
                      <li>
                        Integration of CWIS data to support planning,
                        management, and evaluation of sanitation systems and
                        services.
                      </li>
                      <li>
                        Decision support tools for decision-making based on
                        spatial analysis and modelling.
                      </li>
                      <li>
                        Real-time dashboard for monitoring KPIs and CWIS
                        indicators.
                      </li>
                      <li>
                        User-friendly interfaces with access control features.
                      </li>
                      <li>
                        Scalability to adapt to the evolving technology and
                        information needs.
                      </li>
                      <li>
                        Mainstreaming CWIS service chain into the city's
                        business process.
                      </li>
                      <li>
                        Interoperable with external data sources, including
                        tax/revenue, public health, emergency response data and
                        more.
                      </li>
                      <li>
                        Robust security measures to safeguard sensitive data,
                        ensuring city data privacy compliance.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="w-full md:w-1/2 flex flex-col mt-5 md:mt-0">
                <h1
                  class="text-center text-xl md:text-2xl font-semibold text-white"
                >
                  UN Water SDG 6 Global Acceleration Framework
                </h1>
                <img
                  src="/hello/public/images/imis/water-sdg-6.png"
                  alt=""
                  class="h-full w-full object-scale-down"
                />
              </div>
            </div>
          </div>

          <!--Architecture-->
          <div class="h-full w-full py-10">
            <div
              class="h-full flex flex-col items-center justify-center xl:flex-row space-y-5 xl:space-y-0 xl:space-x-5 2xl-justify-around"
            >
              <div
                class="fade-in h-full w-full xl:w-1/2 flex flex-col space-y-5 items-center border-4 border-solid border-t-0 border-r-0 border-blue"
              >
                <div class="h-full md:h-[550px] w-full md:w-[550px]">
                  <img
                    src="/hello/public/images/imis/system -architecture.png"
                    alt=""
                    class="fade-in h-full w-full object-contain"
                  />
                </div>
                <div class="w-full flex justify-start">
                  <h1 class="text-base text-white bg-blue p-2 px-5">
                    System Architecture
                  </h1>
                </div>
              </div>
              <div
                class="fade-in h-full w-full xl:w-1/2 flex flex-col-reverse items-center border-4 border-solid border-b-0 border-l-0 border-blue"
              >
                <div class="h-full md:h-[550px] w-full md:w-[550px]">
                  <img
                    src="/hello/public/images/imis/imis-driven-service-model.png"
                    alt=""
                    class="fade-in h-full w-full object-contain"
                  />
                </div>

                <div class="w-full flex justify-end">
                  <h1 class="text-base text-white bg-blue p-2 px-5">
                    IMIS Driven Service Model
                  </h1>
                </div>
              </div>
            </div>
          </div>

          <!--IMIS Facilitates-->
          <div class="h-full w-full bg-gray-100 py-10 flex justify-center">
            <div class="h-full md:h-[550px] w-full md:w-[600px]">
              <img
                src="/hello/public/images/imis/what-imis-facilitates.png"
                alt=""
                class="fade-in h-full w-full object-scale-down"
              />
            </div>
          </div>

          <!--IMIS Functional Modules-->
          <div class="h-full w-full mt-12 mb-2">
            <div class="flex flex-col items-center justify-center">
              <div class="w-full text-start">
                <h1 class="font-semibold text-blue text-xl md:text-2xl">
                  IMIS Functional Modules
                </h1>
              </div>
              <div
                id="module-container"
                class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-2"
              >
                <script>
                  // Make sure this script runs after functional_modules is defined
                  document.addEventListener("DOMContentLoaded", function () {
                    const moduleSection =
                      document.getElementById("module-container");

                    moduleSection.innerHTML = functional_modules
                      .map(
                        (module) => `
                          <div class="group relative flex flex-col mt-6 text-gray-700 border border-gray-200 bg-white shadow-lg hover:shadow-xl transform duration-300 ease-in-out bg-clip-border rounded-xl ">
                            <div class="p-4">
                              <object type="image/svg+xml" data="${module.icon}" width="75" height="75"></object>
                              <h5 class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                                ${module.heading}
                              </h5>
                              <p class="block text-xs antialiased font-medium">
                                ${module.description}
                              </p>
                            </div>
                          </div>
                        `
                      )
                      .join("");
                  });
                </script>
              </div>
            </div>
          </div>
        </div>