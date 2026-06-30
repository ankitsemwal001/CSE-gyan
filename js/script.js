function openPreview(pdfPath, title) {
  let modal = document.getElementById("preview-modal");
  if (!modal) {
    modal = document.createElement("div");
    modal.id = "preview-modal";
    modal.innerHTML = `
      <div class="fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl w-full max-w-lg max-h-[90vh] flex flex-col shadow-2xl">

          <div class="flex items-center justify-between px-5 py-4 border-b">
            <h3 id="preview-title" class="font-bold text-lg text-gray-800"></h3>
            <button onclick="closePreview()" class="text-gray-500 hover:text-gray-800 text-2xl leading-none">&times;</button>
          </div>

          <div id="preview-pages" class="overflow-y-auto flex-1 px-4 py-4 space-y-4 bg-gray-50">
            <div class="text-center py-8 text-gray-500">Loading preview...</div>
          </div>

          <div class="border-t bg-white rounded-b-2xl px-5 py-4">
            <div class="flex items-center gap-2 text-gray-500 text-sm mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
              </svg>
              <span>Remaining pages are locked. Buy to unlock full notes.</span>
            </div>
            <button onclick="closePreview()" class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 rounded-full transition">
              🛒 Buy Now – $39 Only
            </button>
          </div>

        </div>
      </div>
    `;
    document.body.appendChild(modal);
  }

  document.getElementById("preview-title").textContent =
    title + " — Sample Preview";

  modal.style.display = "block";
  document.body.style.overflow = "hidden";

  loadPDFPages(pdfPath);
}

function closePreview() {
  const modal = document.getElementById("preview-modal");
  if (modal) modal.style.display = "none";
  document.body.style.overflow = "";
}

async function loadPDFPages(pdfPath) {
  const container = document.getElementById("preview-pages");
  container.innerHTML =
    '<div class="text-center py-8 text-gray-500">Loading preview...</div>';

  try {
    pdfjsLib.GlobalWorkerOptions.workerSrc =
      "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js";

    const pdf = await pdfjsLib.getDocument(pdfPath).promise;
    const totalPages = pdf.numPages;
    const pagesToShow = Math.min(3, totalPages);

    container.innerHTML = "";

    for (let pageNum = 1; pageNum <= pagesToShow; pageNum++) {
      const page = await pdf.getPage(pageNum);
      const viewport = page.getViewport({ scale: 1.3 });

      const canvas = document.createElement("canvas");
      canvas.width = viewport.width;
      canvas.height = viewport.height;
      canvas.className = "w-full rounded-lg shadow border";

      const wrapper = document.createElement("div");
      wrapper.innerHTML = `<p class="text-xs text-gray-400 mb-1">Page ${pageNum} of ${totalPages}</p>`;
      wrapper.appendChild(canvas);
      container.appendChild(wrapper);

      await page.render({ canvasContext: canvas.getContext("2d"), viewport })
        .promise;
    }

    if (totalPages > 3) {
      const lockDiv = document.createElement("div");
      lockDiv.className = "relative rounded-xl overflow-hidden border";
      lockDiv.innerHTML = `
        <div class="bg-gray-200 h-48 flex items-center justify-center">
          <div class="text-center">
            <div class="text-4xl mb-2">🔒</div>
            <p class="text-gray-600 font-semibold">${totalPages - 3} more pages locked</p>
            <p class="text-gray-400 text-sm">Buy to access complete notes</p>
          </div>
        </div>
      `;
      container.appendChild(lockDiv);
    }
  } catch (err) {
    container.innerHTML = `
      <div class="text-center py-8">
        <div class="text-4xl mb-3">📄</div>
        <p class="text-gray-600 font-semibold">Preview not available</p>
        <p class="text-gray-400 text-sm mt-1">File: ${pdfPath}</p>
        <p class="text-gray-400 text-xs mt-1">${err.message}</p>
      </div>
    `;
  }
}

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") closePreview();
});
