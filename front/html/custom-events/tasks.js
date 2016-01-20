var tasks = [
    {id: 112, data: 'pain', creationDate:'2016-01-14 '},
    {id: 117, data: 'beurre', creationDate:'2016-01-17 '},
    {id: 119, data: 'lessive', creationDate:'2016-01-18 '}
];

/*
 * renvoie une tâche à partir de son index
 * */
function getTaskById(searchId){
    var find ;
    tasks.forEach(function(item){
        if( item.id == searchId)
            find = item;
    });
    return find;
}