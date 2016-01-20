/*
 mise à jour de l'affichage des items de la liste
 */
function updateList(tasks) {
    removeChildren(byId('liste'));

    var listItems = tasks.map(getNewTaskListItem);
    listItems.forEach(function (item) {
        byId('liste').appendChild(item);
    });
}

/*
 renvoie un element li basé sur un objet tâche
 */
function getNewTaskListItem(item) {
    var li = document.createElement('li');
    li.appendChild(tNode(item.data));
    li.setAttribute('data-task-id', item.id);
    li.addEventListener('click', onListItemClick);

    var btRemove = href('X', "#");
    btRemove.setAttribute('data-task-id', item.id);
    btRemove.addEventListener("click", onRemoveClick);
    li.appendChild(btRemove);

    return li;
}

/**
 * écouteur de click de selection
 * @param event
 */
function onListItemClick(event) {
    if( event.target != event.currentTarget ){
        event.stopImmediatePropagation();
        return;
    }

    var selectedTaskId = event.target.getAttribute('data-task-id');
    console.log('item cliqué : ', event.target.getAttribute('data-task-id'));
    var selectEvent = new CustomEvent(
        'selectionneItem',
        {
            detail: {taskId: selectedTaskId},
            bubbles: true,
            cancelable: true
        }
    );
    event.target.dispatchEvent(selectEvent);
}

/**
 * au click sur un lien de suppresion » emet un evenement personnalisé 'supprimeItem'
 * @param event
 */
function onRemoveClick(event) {
    var removedTaskId = event.target.getAttribute('data-task-id');
    console.log('item supprimé : ', removedTaskId);
    var rmEvent = new CustomEvent(
        'supprimeItem',
        {
            detail: {taskId: removedTaskId},
            bubbles: true,
            cancelable: true
        }
    );
    event.target.dispatchEvent(rmEvent);
}