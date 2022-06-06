
const modalOpenHandler = (e) => {
    let id = e.currentTarget.dataset.targetModalId;
    modalOpen(id);
}

const modalOpen = (id) => {
    let root = document.querySelector('#' + id);

    root.querySelector('.modal__backdrop').classList.add('show');
    document.querySelector('body').classList.add('modal-open');
    root.querySelector('#' + id + ' .modal__body').classList.add('display');

    setTimeout(() => {
        document.querySelector('#' + id + ' .modal__body').classList.add('open');
        root.dispatchEvent(new CustomEvent("modalOpenEvent"));
    }, 1);

    window.LazyLoadInstance.update();
}
window.modalOpen = modalOpen;



const modalCloseHandler = (e) => {
    let id = e.currentTarget.closest('.modal__body__wrp').id;
    //console.log(id.id)

    modalClose(id);
}
const modalClose = (id) => {
    let root = document.querySelector('#' + id);

    root.querySelector('.modal__backdrop').classList.remove('show');
    root.querySelector('.modal__body').classList.remove('open');

    setTimeout(() => {
        root.querySelector('.modal__body').classList.add('display');
        document.querySelector('body').classList.remove('modal-open');
        root.dispatchEvent(new CustomEvent("modalCloseEvent"));
    }, 1);

}
window.modalClose = modalClose;

const modalInitEvent = () => {
    document.querySelectorAll('[data-target-modal-id]').forEach(item => {
        item.removeEventListener('click', modalOpenHandler);
        item.addEventListener('click', modalOpenHandler);
    });
    document.querySelectorAll('.modal__backdrop').forEach(item => {
        item.removeEventListener('click', modalCloseHandler);
        item.addEventListener('click', modalCloseHandler);
    });

    document.querySelectorAll('.modal__close').forEach(item => {
        item.removeEventListener('click', modalCloseHandler);
        item.addEventListener('click', modalCloseHandler);
    });
}
window.modalInitEvent = modalInitEvent;

modalInitEvent();

document.dispatchEvent(new CustomEvent('modalDownloaded'));









