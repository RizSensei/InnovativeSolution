<div class="px-5 sm:px-10 md:px-14 xl:px-20 2xl:px-60 py-10">
          <!-- ebps introduction -->
          <div
            class="h-full py-5 flex flex-col-reverse lg:flex lg:flex-row-reverse gap-10"
          >
            <div
              class="h-full w-full lg:w-1/2 flex flex-col items-center justify-center"
            >
              <img
                src="/hello/public/images/ebps/ebps system architecture.png"
                alt=""
                class="h-full w-full object-scale-down"
              />
            </div>
            <div
              class="w-full lg:w-1/2 mt-5 flex flex-col justify-center items-center lg:items-start text-center lg:text-left space-y-5 md:space-y-7 lg:space-y-8"
            >
              <h1
                class="uppercase font-semibold 2xl:font-bold text-2xl lg:text-[40px] text-blue leading-tight"
              >
                electronic building permit system
              </h1>
              <p
                class="text-sm 2xl:text-base text-light-black font-medium text-justify"
              >
                The e-BPS is a cutting-edge digital solution to transform the
                building permit process, shifting from a traditional,
                paper-based approach to an efficient, transparent, and
                easy-to-use electronic system. It enables municipalities to
                optimize workflows, shorten processing times, and improve
                service delivery by significantly reducing the time required to
                process and approve building permits. e-BPS’s online submission
                of applications and documents, eliminates the need for multiple
                visits to municipal offices. National Building Code (NBC) and
                Building Bye-laws (BBL) compliance is an integral part of e-BPS
                which helps local authorities make cities and human settlements
                safer and more resilient. Additionally, the e-BPS promotes
                eco-friendly practices by reducing the paper usage.
                <br /><br />
                e-BPS was initiated in 2012 by CDRMP/UNDP with the technical
                support of Innovative Solution Pvt. Ltd. (ISPL) under the
                project Automated Building Permit Process (PISU/RFP/006/2012) to
                support local government authorities in promoting safe building
                practices by implementing NBC and BBL.
              </p>
            </div>
          </div>

          <!-- ebps metropolitan areas  -->
          <div class="h-full w-full mt-10 mb-2 bg-gray-100 p-5">
            <div id="areas-category" class="mb-2 flex gap-3 justify-center">
              <script>
                const areasCategory = [
                  "Municipality",
                  "Metropolitan City",
                  "Sub-Metropolitan City",
                ];
                document.getElementById("areas-category").innerHTML =
                  areasCategory
                    .map((area, i) => {
                      return `
                  <button  onclick="handleClick(this)" class="cursor-pointer border-none group no-underline text-blue w-max text-center px-3 py-3 shadow-sm shadow-blue transform ease-in-out duration-300">
                <h4 class="font-medium">${area}</h4>
              </a>
                  `;
                    })
                    .join("");
              </script>
            </div>
            <div id="ebps-areas" class="mt-5 grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-2">
              <script>
                document.getElementById("ebps-areas").innerHTML = [
                  1, 1, 1, 1, 1, 1, 1, 1,
                ]
                  .map((area, i) => {
                    return `
                  <a href="" class="group no-underline hover:underline text-white bg-blue w-full text-center py-3 hover:shadow-sm hover:shadow-blue transform ease-in-out duration-300">
                <h4 class="font-medium">Kathmandu Metropolitan City</h4>
              </a>
                  `;
                  })
                  .join("");
              </script>
            </div>
          </div>

          <!--ebps FEatures-->
          <div class="h-full w-full mt-12 mb-2">
            <div class="flex flex-col items-center justify-center">
              <div class="w-full text-start">
                <h1 class="font-semibold text-blue text-xl md:text-2xl">
                  Features of e-BPS
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

                    moduleSection.innerHTML = ebpsFeatures
                      .map(
                        (module) => `
                                      <div class="group relative flex flex-col mt-6 text-gray-700 border border-gray-200 bg-white shadow-lg hover:shadow-xl transform duration-300 ease-in-out bg-clip-border rounded-xl ">
                                        <div class="p-4">
                                          <img src="${module.icon}" alt="" class="h-12 w-12"/>
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

          <!-- ebps workflow  -->
          <div class="h-full w-full mt-10 mb-2 bg-gray-100 p-5">
            <div class="grid grid-cols-1 xl:grid-cols-2 gap-5">
              <div class="w-full flex justify-center items-center">
                <img
                  src="/hello/public/images/ebps/ebps workflow.png"
                  alt=""
                  class="h-72 sm:h-96"
                />
              </div>
              <div class="workflow-list flex flex-col gap-2">
                <div class="w-full text-start">
                  <h1 class="font-semibold text-blue text-xl md:text-2xl">
                    Workflow of e-BPS
                  </h1>
                </div>
                <div>
                  <ul class="list-none list-outside grid grid-cols-2 gap-2">
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        DESIGNER DESK
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Creates permit application and submits online to the
                        municipality office with other required documents
                      </p>
                    </li>
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        REGISTRATION DESK
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Receives applications from designers and verifies the
                        general data and information provided in the application
                      </p>
                    </li>
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        WARD/FIELD DESK
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Verifies construction plan in the field to get no
                        objection for construction from adjacent property owners
                        and if the plan is comply with municipality’s BBL for
                        permit
                      </p>
                    </li>
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        TECHNICAL DESK
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Checks if the construction plan complies with NBC and
                        municipality’s BBL and calculates the permit tax.
                      </p>
                    </li>
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        EXECUTIVE DESK
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Give approval to issue building construction permit
                        certification
                      </p>
                    </li>
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        ARCHIVAL DESK
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Manages archives of all documents and permit
                        certificates issued for building construction.
                      </p>
                    </li>
                    <li class="p-2 bg-white">
                      <h5
                        class="block mt-1 mb-2 font-sans text-base md:text-[18px] text-blue antialiased font-semibold leading-snug tracking-normal text-blue-gray-900"
                      >
                        OTHER DESKS
                      </h5>
                      <p
                        class="text-light-black block text-xs antialiased font-medium"
                      >
                        Revenue, Legal, Addressing, Sanitation Desks, etc. as of
                        city’s requirements
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>