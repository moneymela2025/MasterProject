
   //  Tooltip Enable
   // ===============
   const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
   const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
   // ==========
   $('#toggleNavbar').click(function () {
       $('.sidebar, .xyz').toggleClass("open");
       $('#toggleNavbar .toggle').toggleClass("active");
       return false;
   });

// Side Menu Collapse
let currentParentCollapse = null;
function toggleParentCollapse(targetId) {
  const targetCollapse = document.querySelector(targetId);
  // Close other parent collapses when opening a new one
  if (currentParentCollapse !== targetCollapse) {
    document.querySelectorAll(".sidebar .collapse.show").forEach((collapse) => {
      if (!targetCollapse.contains(collapse)) {
        const collapseId = "#" + collapse.id;
        document.querySelector(`[data-bs-target="${collapseId}"]`).click();
      }
    });
    currentParentCollapse = targetCollapse;
  }
}
const path = window.location.pathname;
  const lastSegment = path.substring(path.lastIndexOf("/") + 1);
  $('.sidebar .nav-link').each(function () {
    const $this = $(this);
    if ($this.attr('href') === lastSegment) {
      $this.addClass('active');
      $this.parents('.collapse').each(function () {
        $(this).addClass('show');
        $(this).prev().removeClass('collapsed');
        $(this).prev().attr('aria-expanded', true);
      });
    }
  });
function toggleChildCollapse(targetId) {
  const targetCollapse = document.querySelector(targetId);
  const parentCollapse = targetCollapse.closest(".collapse");

  // Close other child collapses within the same parent when opening a new one
  parentCollapse.querySelectorAll(".collapse.show").forEach((collapse) => {
    if (collapse !== targetCollapse) {
      const collapseId = "#" + collapse.id;
      document.querySelector(`[data-bs-target="${collapseId}"]`).click();
    }
  });

  targetCollapse.classList.toggle("show");
}


$(document).ready(function () {
  const tableIds = ['#example', '#example2', '#example3', '#example4', '#example5', '#example6'];
  tableIds.forEach(function (tableId) {
      $(tableId).DataTable({
          dom: "lBfrtip",
          buttons: [
              {
                  extend: "excel",
                  exportOptions: {
                      columns: ":visible",
                  },
              },
              {
                extend: "pdf",
                orientation: "landscape",
                pageSize: "A4",
                exportOptions: {
                  columns: ":not(:last-child)", 
              },
                  customize: function (doc) {
                      // Apply custom styling to prevent wrapping in the thead
                      doc.styles.tableHeader = {
                          bold: true,
                          fontSize: 10,
                          alignment: "center",
                          color: "#ffffff",
                          fillColor: "#EC7C46",
                          noWrap: true, // This ensures no wrapping in the header
                      };
                      // Set column widths to prevent content wrapping
                      const colCount = doc.content[1].table.body[0].length;
                      doc.content[1].table.widths = Array(colCount).fill('auto'); // Or use fixed widths like ['15%', '20%', ...]
                      // Reduce font size for better fitting
                      doc.defaultStyle.fontSize = 9;
                  },
              },
              {
                extend: "colvis",
                text: "",
              },
          ],
          lengthMenu: [
              [10, 25, 50, 100, -1],
              [10, 25, 50, 100, "All"],
          ],
      });
  });
});


// Preview Image
const fileContainers = document.querySelectorAll(".file-container");
fileContainers.forEach((fileContainer) => {
  const fileInput = fileContainer.querySelector(".file-input");
  const filePreview = fileContainer.querySelector(".file-preview");
  const downloadButton = fileContainer.querySelector(".download-button");

  fileInput.addEventListener("change", function (event) {
    const selectedFiles = event.target.files;
    filePreview.innerHTML = ""; // Clear existing previews

    for (let i = 0; i < selectedFiles.length; i++) {
      const file = selectedFiles[i];
      const fileType = file.type;

      const reader = new FileReader();
      reader.onload = function (e) {
        if (fileType.startsWith("image/")) {
          const image = document.createElement("img");
          image.src = e.target.result;
          image.classList.add("file-preview");
          filePreview.appendChild(image);
        } else if (fileType === "application/pdf") {
          const embed = document.createElement("embed");
          embed.src = e.target.result;
          embed.type = "application/pdf";
          embed.classList.add("file-preview");
          filePreview.appendChild(embed);
        }
      };

      reader.readAsDataURL(file);
    }
  });

  downloadButton.addEventListener("click", function () {
    const previewedFiles = filePreview.querySelectorAll("img, embed");

    previewedFiles.forEach((previewedFile) => {
      const dataURL = previewedFile.src;
      const anchor = document.createElement("a");
      anchor.href = dataURL;
      anchor.download = "file";
      anchor.style.display = "none";
      document.body.appendChild(anchor);
      anchor.click();
      document.body.removeChild(anchor);
    });
  });
});
