(() => {
  "use strict";

  const EMAILJS_CONFIG = {
    publicKey: "uWnEB4TnXLiSdMTEU",
    serviceId: "service_iwvrrn9",
    templateId: "template_eqlf6i6"
  };

  const state = {
    language: getSavedLanguage(),
    projectFilter: "All",
    theme: document.documentElement.dataset.theme === "light" ? "light" : "dark"
  };

  const elements = {
    header: document.getElementById("site-header"),
    menuButton: document.getElementById("mobile-menu-button"),
    navigation: document.getElementById("primary-navigation"),
    languageButton: document.getElementById("language-toggle"),
    themeButton: document.getElementById("theme-toggle"),
    projectGrid: document.getElementById("project-grid"),
    projectCount: document.getElementById("project-count"),
    filterButtons: [...document.querySelectorAll("[data-filter]")],
    contactForm: document.getElementById("contact-form"),
    submitButton: document.getElementById("submit-button"),
    scrollTopButton: document.getElementById("scroll-top")
  };

  function getSavedLanguage() {
    try {
      return localStorage.getItem("portfolio-language") === "en" ? "en" : "tr";
    } catch {
      return "tr";
    }
  }

  function saveLanguage(language) {
    try {
      localStorage.setItem("portfolio-language", language);
    } catch {
      // The site continues to work when storage is unavailable.
    }
  }

  function translate(key) {
    return window.TRANSLATIONS[state.language][key];
  }

  function setLanguage(language) {
    state.language = language;
    const dictionary = window.TRANSLATIONS[language];

    document.documentElement.lang = language;
    document.title = language === "tr"
      ? "Ali Can Doğan | Yazılım Mühendisi"
      : "Ali Can Doğan | Software Engineer";

    const description = document.querySelector('meta[name="description"]');
    if (description) {
      description.content = language === "tr"
        ? "Ali Can Doğan'ın web, masaüstü ve mobil yazılım projelerini içeren kişisel portfolyosu."
        : "Ali Can Doğan's personal portfolio featuring web, desktop and mobile software projects.";
    }

    document.querySelectorAll("[data-i18n]").forEach(element => {
      const value = dictionary[element.dataset.i18n];
      if (typeof value === "string") element.textContent = value;
    });

    elements.languageButton.textContent = language === "tr" ? "EN" : "TR";
    elements.languageButton.setAttribute("aria-label", dictionary.language_label);
    elements.navigation.setAttribute("aria-label", dictionary.nav_label);
    document.querySelector(".project-filters")?.setAttribute("aria-label", dictionary.filter_label);
    elements.scrollTopButton.setAttribute("aria-label", dictionary.scroll_top);
    updateThemeButton();
    updateMenuAccessibility();
    saveLanguage(language);
    renderProjects();
  }

  function saveTheme(theme) {
    try {
      localStorage.setItem("portfolio-theme-v2", theme);
    } catch {
      // The default light theme still works when storage is unavailable.
    }
  }

  function updateThemeButton() {
    const switchesToLight = state.theme === "dark";
    const label = switchesToLight ? translate("theme_light") : translate("theme_dark");
    const icon = elements.themeButton.querySelector("i");

    elements.themeButton.setAttribute("aria-label", label);
    elements.themeButton.title = label;
    icon.className = switchesToLight ? "fa-regular fa-sun" : "fa-regular fa-moon";
  }

  function setTheme(theme, persist = true) {
    state.theme = theme;
    document.documentElement.dataset.theme = theme;
    document.querySelector('meta[name="theme-color"]')?.setAttribute(
      "content",
      theme === "dark" ? "#0b0f19" : "#f4f6fa"
    );
    updateThemeButton();
    if (persist) saveTheme(theme);
  }

  function createProjectCard(project) {
    const name = project.name[state.language];
    const card = document.createElement("article");
    card.className = "project-card";

    const imageWrap = document.createElement("div");
    imageWrap.className = "project-image";

    if (project.image) {
      const image = document.createElement("img");
      image.src = project.image;
      image.alt = translate("project_image")(name);
      image.loading = "lazy";
      image.decoding = "async";
      image.addEventListener("error", () => {
        image.remove();
        imageWrap.classList.add("image-unavailable");
        imageWrap.setAttribute("aria-label", name);
      }, { once: true });
      imageWrap.append(image);
    } else {
      imageWrap.classList.add("project-visual", `project-visual-${project.visual.theme}`);
      const visualIcon = document.createElement("i");
      visualIcon.className = `fa-solid ${project.visual.icon}`;
      visualIcon.setAttribute("aria-hidden", "true");
      imageWrap.append(visualIcon);
      imageWrap.setAttribute("aria-label", name);
    }

    const body = document.createElement("div");
    body.className = "project-body";

    const meta = document.createElement("div");
    meta.className = "project-meta";

    const type = document.createElement("span");
    type.className = "project-type";
    type.textContent = translate("project_types")[project.type];
    meta.append(type);

    if (project.isNew) {
      const newBadge = document.createElement("span");
      newBadge.className = "project-new";
      newBadge.textContent = translate("new_badge");
      meta.append(newBadge);
    }

    const title = document.createElement("h3");
    title.textContent = name;

    let link;
    if (project.url) {
      link = document.createElement("a");
      link.className = "project-link";
      link.href = project.url;
      link.target = "_blank";
      link.rel = "noopener noreferrer";
      link.innerHTML = `<span>${translate("inspect")}</span><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>`;
      link.setAttribute("aria-label", `${translate("inspect")}: ${name}`);
    } else {
      link = document.createElement("span");
      link.className = "project-link project-link-disabled";
      link.innerHTML = `<span>${translate("coming_soon")}</span><i class="fa-regular fa-clock" aria-hidden="true"></i>`;
    }

    body.append(meta, title, link);
    card.append(imageWrap, body);
    return card;
  }

  function renderProjects() {
    const visibleProjects = state.projectFilter === "All"
      ? window.PROJECTS
      : window.PROJECTS.filter(project => project.type === state.projectFilter);
    const fragment = document.createDocumentFragment();

    visibleProjects.forEach(project => fragment.append(createProjectCard(project)));
    elements.projectGrid.replaceChildren(fragment);
    elements.projectCount.textContent = translate("project_count")(visibleProjects.length);
  }

  function setProjectFilter(filter) {
    state.projectFilter = filter;
    elements.filterButtons.forEach(button => {
      const isActive = button.dataset.filter === filter;
      button.classList.toggle("active", isActive);
      button.setAttribute("aria-pressed", String(isActive));
    });
    renderProjects();
  }

  function isMenuOpen() {
    return elements.navigation.dataset.open === "true";
  }

  function updateMenuAccessibility() {
    elements.menuButton.setAttribute(
      "aria-label",
      isMenuOpen() ? translate("menu_close") : translate("menu_open")
    );
  }

  function setMenu(open, returnFocus = false) {
    elements.navigation.dataset.open = String(open);
    elements.menuButton.setAttribute("aria-expanded", String(open));
    document.body.classList.toggle("menu-open", open);
    updateMenuAccessibility();
    if (!open && returnFocus) elements.menuButton.focus();
  }

  function setupNavigation() {
    elements.menuButton.addEventListener("click", () => setMenu(!isMenuOpen()));

    elements.navigation.querySelectorAll("a").forEach(link => {
      link.addEventListener("click", () => setMenu(false));
    });

    document.addEventListener("keydown", event => {
      if (event.key === "Escape" && isMenuOpen()) setMenu(false, true);
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth > 780 && isMenuOpen()) setMenu(false);
    });

    const sections = [...document.querySelectorAll("main section[id]")];
    const navLinks = [...elements.navigation.querySelectorAll('a[href^="#"]')];

    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(entries => {
        const visibleSection = entries
          .filter(entry => entry.isIntersecting)
          .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

        if (!visibleSection) return;
        navLinks.forEach(link => {
          const isCurrent = link.getAttribute("href") === `#${visibleSection.target.id}`;
          if (isCurrent) link.setAttribute("aria-current", "true");
          else link.removeAttribute("aria-current");
        });
      }, { rootMargin: "-22% 0px -62%", threshold: [0, 0.15, 0.4] });

      sections.forEach(section => observer.observe(section));
    }
  }

  function showMessage(type, title, message) {
    if (window.Swal?.fire) {
      return window.Swal.fire({
        icon: type,
        title,
        text: message,
        background: "#151b29",
        color: "#f8fafc",
        confirmButtonColor: "#f04b45"
      });
    }

    window.alert(`${title}\n\n${message}`);
    return Promise.resolve();
  }

  function setupContactForm() {
    if (window.emailjs) {
      window.emailjs.init(EMAILJS_CONFIG.publicKey);
    }

    elements.contactForm.addEventListener("submit", async event => {
      event.preventDefault();

      if (!window.emailjs) {
        await showMessage("error", translate("error_title"), translate("service_error"));
        return;
      }

      const label = elements.submitButton.querySelector("span");
      elements.submitButton.disabled = true;
      label.textContent = translate("sending");

      try {
        await window.emailjs.sendForm(
          EMAILJS_CONFIG.serviceId,
          EMAILJS_CONFIG.templateId,
          elements.contactForm
        );
        elements.contactForm.reset();
        await showMessage("success", translate("success_title"), translate("success_message"));
      } catch {
        await showMessage("error", translate("error_title"), translate("error_message"));
      } finally {
        elements.submitButton.disabled = false;
        label.textContent = translate("contact_btn");
      }
    });
  }

  function setupScrollControls() {
    let scheduled = false;

    const update = () => {
      const hasScrolled = window.scrollY > 24;
      elements.header.classList.toggle("scrolled", hasScrolled);
      elements.scrollTopButton.hidden = window.scrollY < 520;
      scheduled = false;
    };

    window.addEventListener("scroll", () => {
      if (!scheduled) {
        window.requestAnimationFrame(update);
        scheduled = true;
      }
    }, { passive: true });

    elements.scrollTopButton.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });

    update();
  }

  function init() {
    document.getElementById("current-year").textContent = new Date().getFullYear();
    elements.filterButtons.forEach(button => {
      button.addEventListener("click", () => setProjectFilter(button.dataset.filter));
    });
    elements.languageButton.addEventListener("click", () => {
      setLanguage(state.language === "tr" ? "en" : "tr");
    });
    elements.themeButton.addEventListener("click", () => {
      setTheme(state.theme === "dark" ? "light" : "dark");
    });

    setupNavigation();
    setupContactForm();
    setupScrollControls();
    setTheme(state.theme, false);
    setLanguage(state.language);
  }

  init();
})();
