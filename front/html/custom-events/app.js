var selectedTaskId = -1;

/*
 initialisation de l'application :
 + affichage de la liste
 + écoute des events 'supprimeItem'
 */
function init(tasks) {
    updateList(tasks);
    addEventListener('selectionneItem', selectItem);
    addEventListener('supprimeItem', supprimeItem);
}

/**
 * écouteur d'evenement de suppression d'item
 * @param event
 */
function selectItem(event) {
    deselect();

    selectedTaskId =  event.detail.taskId;
    var selectedTask =  getTaskById(selectedTaskId);

    var title = document.createElement('h1');
    title.textContent = selectedTask.data;
    byId('detailsBox').appendChild(title);

    var creationDate = document.createElement('p');
    creationDate.textContent = selectedTask.creationDate;
    byId('detailsBox').appendChild(creationDate);

}

/**
 * vide la #detailBox + efface
 */
function deselect() {
    removeChildren(byId('detailsBox'));
    selectedTaskId = -1;
}

/**
 * écouteur d'evenement de suppression d'item
 * @param event
 */
function supprimeItem(event) {
    var removedId = event.detail.taskId;
    console.log('supprimeItem : ', removedId);

    if( removedId == selectedTaskId ) {
        deselect()
    }
    //var removedIndex = getTaskIndex(removedId);
    var removedIndex = tasks.indexOf(getTaskById(removedId));
    if( removedIndex >= 0 ){
        tasks.splice(removedIndex, 1);
        updateList(tasks);
    } else
        console.log("Une erreur s'est produite : tâche introuvable");
}

