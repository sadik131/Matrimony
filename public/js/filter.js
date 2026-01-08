document.addEventListener('DOMContentLoaded', () => {

  const openFilterSidebar = document.getElementById('openFilterSidebar');
  const closeBtn = document.getElementById('closeBtn');
  const closeFilterSidebar = document.getElementById('closeFilterSidebar');
  const filterSidebar = document.getElementById('filterSidebar');
  const overlay = document.getElementById('overlay');
  const menuBtn = document.getElementById('menuBtn');
  const sidebar = document.getElementById('sidebar');

  if (openFilterSidebar && filterSidebar && overlay) {
    openFilterSidebar.addEventListener('click', () => {
      filterSidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
    });
  }

  if (closeBtn && sidebar && overlay) {
    closeBtn.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });
  }

  if (closeFilterSidebar && filterSidebar && overlay) {
    closeFilterSidebar.addEventListener('click', () => {
      filterSidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });
  }

  if (overlay && filterSidebar) {
    overlay.addEventListener('click', () => {
      filterSidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });
  }

  if (menuBtn && sidebar && overlay) {
    menuBtn.addEventListener('click', () => {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
    });
  }

  // ======================
  // Dropdown toggle
  // ======================
  window.toggleDropdown = function (id) {
    const content = document.getElementById(id);
    const icon = document.getElementById(id + 'Icon');
    if (!content || !icon) return;

    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
  };

  // ======================
  // Age Range Slider (CLASS BASED – IMPORTANT)
  // ======================
  document.querySelectorAll('.slider-container').forEach(container => {

    const minRange = container.querySelector('.range-min');
    const maxRange = container.querySelector('.range-max');
    const rangeTrack = container.querySelector('.range-track');

    const wrapper = container.closest('.bg-white');
    const minValue = wrapper?.querySelector('.range-min-value');
    const maxValue = wrapper?.querySelector('.range-max-value');

    if (!minRange || !maxRange || !rangeTrack || !minValue || !maxValue) return;

    const minGap = 10;
    const min = parseInt(minRange.min);
    const max = parseInt(minRange.max);

    function updateRange(e) {
      let minVal = parseInt(minRange.value);
      let maxVal = parseInt(maxRange.value);

      if (maxVal - minVal < minGap) {
        if (e?.target === minRange) {
          minRange.value = maxVal - minGap;
        } else {
          maxRange.value = minVal + minGap;
        }
      }

      minValue.textContent = minRange.value;
      maxValue.textContent = maxRange.value;

      const minPercent = ((minRange.value - min) / (max - min)) * 100;
      const maxPercent = ((maxRange.value - min) / (max - min)) * 100;

      rangeTrack.style.left = minPercent + '%';
      rangeTrack.style.right = (100 - maxPercent) + '%';
    }

    minRange.addEventListener('input', updateRange);
    maxRange.addEventListener('input', updateRange);

    updateRange();
  });

  // ======================
  // Address Select (District → Upazila)
  // ======================
  const upazilaMap = {
    dhaka: ["ঢাকা সদর", "উত্তরা", "মিরপুর", "ধানমন্ডি"],
    gazipur: ["গাজীপুর সদর", "টঙ্গী", "কালিয়াকৈর", "কাপাসিয়া"],
    narayanganj: ["নারায়ণগঞ্জ সদর", "আড়াইহাজার", "রূপগঞ্জ"],
    chittagong: ["চট্টগ্রাম সদর", "পটিয়া", "সীতাকুণ্ড"],
    sylhet: ["সিলেট সদর", "বিয়ানীবাজার", "গোলাপগঞ্জ"],
    khulna: ["খুলনা সদর", "রূপসা", "ফুলতলা"],
  };

  function setupSelect(selectId) {
    const select = document.getElementById(selectId);
    if (!select) return;

    let isDistrictSelected = true;

    select.addEventListener('change', function () {
      const selected = this.value;

      if (isDistrictSelected && upazilaMap[selected]) {
        this.innerHTML = '<option value="">উপজেলা নির্বাচন করুন</option>';

        upazilaMap[selected].forEach(upazila => {
          const option = document.createElement('option');
          option.value = upazila;
          option.textContent = upazila;
          this.appendChild(option);
        });

        isDistrictSelected = false;
      }
    });
  }

  setupSelect('location1');
  setupSelect('location2');

});
