

(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '<ul><li data-name="namespace:Application" class="opened"><div style="padding-left:0px" class="hd"><span class="icon icon-play"></span><a href="Application.html">Application</a></div><div class="bd"><ul><li data-name="namespace:Application_Controllers" class="opened"><div style="padding-left:18px" class="hd"><span class="icon icon-play"></span><a href="Application/Controllers.html">Controllers</a></div><div class="bd"><ul><li data-name="namespace:Application_Controllers_Add_comment" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Controllers/Add_comment.html">Add_comment</a></div><div class="bd"><ul><li data-name="class:Application_Controllers_Add_comment_AddCommentController" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Controllers/Add_comment/AddCommentController.html">AddCommentController</a></div></li></ul></div></li><li data-name="namespace:Application_Controllers_HomePage" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Controllers/HomePage.html">HomePage</a></div><div class="bd"><ul><li data-name="class:Application_Controllers_HomePage_HomepageController" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Controllers/HomePage/HomepageController.html">HomepageController</a></div></li></ul></div></li><li data-name="namespace:Application_Controllers_Post" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Controllers/Post.html">Post</a></div><div class="bd"><ul><li data-name="class:Application_Controllers_Post_PostController" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Controllers/Post/PostController.html">PostController</a></div></li></ul></div></li><li data-name="namespace:Application_Controllers_Update" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Controllers/Update.html">Update</a></div><div class="bd"><ul><li data-name="class:Application_Controllers_Update_UpdateController" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Controllers/Update/UpdateController.html">UpdateController</a></div></li></ul></div></li></ul></div></li><li data-name="namespace:Application_Lib" class="opened"><div style="padding-left:18px" class="hd"><span class="icon icon-play"></span><a href="Application/Lib.html">Lib</a></div><div class="bd"><ul><li data-name="namespace:Application_Lib_Database" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Lib/Database.html">Database</a></div><div class="bd"><ul><li data-name="class:Application_Lib_Database_DatabaseConnection" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Lib/Database/DatabaseConnection.html">DatabaseConnection</a></div></li></ul></div></li></ul></div></li><li data-name="namespace:Application_Model" class="opened"><div style="padding-left:18px" class="hd"><span class="icon icon-play"></span><a href="Application/Model.html">Model</a></div><div class="bd"><ul><li data-name="namespace:Application_Model_Comment" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Model/Comment.html">Comment</a></div><div class="bd"><ul><li data-name="class:Application_Model_Comment_Comment" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Model/Comment/Comment.html">Comment</a></div></li><li data-name="class:Application_Model_Comment_CommentRepository" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Model/Comment/CommentRepository.html">CommentRepository</a></div></li></ul></div></li><li data-name="namespace:Application_Model_Post" ><div style="padding-left:36px" class="hd"><span class="icon icon-play"></span><a href="Application/Model/Post.html">Post</a></div><div class="bd"><ul><li data-name="class:Application_Model_Post_Post" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Model/Post/Post.html">Post</a></div></li><li data-name="class:Application_Model_Post_PostRepository" ><div style="padding-left:62px" class="hd leaf"><a href="Application/Model/Post/PostRepository.html">PostRepository</a></div></li></ul></div></li></ul></div></li></ul></div></li></ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                        {"type":"Namespace","link":"Application.html","name":"Application","doc":"Namespace Application"},{"type":"Namespace","link":"Application/Controllers.html","name":"Application\\Controllers","doc":"Namespace Application\\Controllers"},{"type":"Namespace","link":"Application/Controllers/Add_comment.html","name":"Application\\Controllers\\Add_comment","doc":"Namespace Application\\Controllers\\Add_comment"},{"type":"Namespace","link":"Application/Controllers/HomePage.html","name":"Application\\Controllers\\HomePage","doc":"Namespace Application\\Controllers\\HomePage"},{"type":"Namespace","link":"Application/Controllers/Post.html","name":"Application\\Controllers\\Post","doc":"Namespace Application\\Controllers\\Post"},{"type":"Namespace","link":"Application/Controllers/Update.html","name":"Application\\Controllers\\Update","doc":"Namespace Application\\Controllers\\Update"},{"type":"Namespace","link":"Application/Lib.html","name":"Application\\Lib","doc":"Namespace Application\\Lib"},{"type":"Namespace","link":"Application/Lib/Database.html","name":"Application\\Lib\\Database","doc":"Namespace Application\\Lib\\Database"},{"type":"Namespace","link":"Application/Model.html","name":"Application\\Model","doc":"Namespace Application\\Model"},{"type":"Namespace","link":"Application/Model/Comment.html","name":"Application\\Model\\Comment","doc":"Namespace Application\\Model\\Comment"},{"type":"Namespace","link":"Application/Model/Post.html","name":"Application\\Model\\Post","doc":"Namespace Application\\Model\\Post"},                                                        {"type":"Class","fromName":"Application\\Controllers\\Add_comment","fromLink":"Application/Controllers/Add_comment.html","link":"Application/Controllers/Add_comment/AddCommentController.html","name":"Application\\Controllers\\Add_comment\\AddCommentController","doc":null},
                                {"type":"Method","fromName":"Application\\Controllers\\Add_comment\\AddCommentController","fromLink":"Application/Controllers/Add_comment/AddCommentController.html","link":"Application/Controllers/Add_comment/AddCommentController.html#method_addComment","name":"Application\\Controllers\\Add_comment\\AddCommentController::addComment","doc":null},
            
                                                {"type":"Class","fromName":"Application\\Controllers\\HomePage","fromLink":"Application/Controllers/HomePage.html","link":"Application/Controllers/HomePage/HomepageController.html","name":"Application\\Controllers\\HomePage\\HomepageController","doc":null},
                                {"type":"Method","fromName":"Application\\Controllers\\HomePage\\HomepageController","fromLink":"Application/Controllers/HomePage/HomepageController.html","link":"Application/Controllers/HomePage/HomepageController.html#method_homepage","name":"Application\\Controllers\\HomePage\\HomepageController::homepage","doc":null},
            
                                                {"type":"Class","fromName":"Application\\Controllers\\Post","fromLink":"Application/Controllers/Post.html","link":"Application/Controllers/Post/PostController.html","name":"Application\\Controllers\\Post\\PostController","doc":null},
                                {"type":"Method","fromName":"Application\\Controllers\\Post\\PostController","fromLink":"Application/Controllers/Post/PostController.html","link":"Application/Controllers/Post/PostController.html#method_post","name":"Application\\Controllers\\Post\\PostController::post","doc":null},
        {"type":"Method","fromName":"Application\\Controllers\\Post\\PostController","fromLink":"Application/Controllers/Post/PostController.html","link":"Application/Controllers/Post/PostController.html#method_comment","name":"Application\\Controllers\\Post\\PostController::comment","doc":null},
            
                                                {"type":"Class","fromName":"Application\\Controllers\\Update","fromLink":"Application/Controllers/Update.html","link":"Application/Controllers/Update/UpdateController.html","name":"Application\\Controllers\\Update\\UpdateController","doc":null},
                                {"type":"Method","fromName":"Application\\Controllers\\Update\\UpdateController","fromLink":"Application/Controllers/Update/UpdateController.html","link":"Application/Controllers/Update/UpdateController.html#method_updateComment","name":"Application\\Controllers\\Update\\UpdateController::updateComment","doc":null},
            
                                                {"type":"Class","fromName":"Application\\Lib\\Database","fromLink":"Application/Lib/Database.html","link":"Application/Lib/Database/DatabaseConnection.html","name":"Application\\Lib\\Database\\DatabaseConnection","doc":null},
                                {"type":"Method","fromName":"Application\\Lib\\Database\\DatabaseConnection","fromLink":"Application/Lib/Database/DatabaseConnection.html","link":"Application/Lib/Database/DatabaseConnection.html#method_getConnection","name":"Application\\Lib\\Database\\DatabaseConnection::getConnection","doc":null},
            
                                                {"type":"Class","fromName":"Application\\Model\\Comment","fromLink":"Application/Model/Comment.html","link":"Application/Model/Comment/Comment.html","name":"Application\\Model\\Comment\\Comment","doc":null},
                
                                                {"type":"Class","fromName":"Application\\Model\\Comment","fromLink":"Application/Model/Comment.html","link":"Application/Model/Comment/CommentRepository.html","name":"Application\\Model\\Comment\\CommentRepository","doc":null},
                                {"type":"Method","fromName":"Application\\Model\\Comment\\CommentRepository","fromLink":"Application/Model/Comment/CommentRepository.html","link":"Application/Model/Comment/CommentRepository.html#method_getComments","name":"Application\\Model\\Comment\\CommentRepository::getComments","doc":null},
        {"type":"Method","fromName":"Application\\Model\\Comment\\CommentRepository","fromLink":"Application/Model/Comment/CommentRepository.html","link":"Application/Model/Comment/CommentRepository.html#method_getComment","name":"Application\\Model\\Comment\\CommentRepository::getComment","doc":null},
        {"type":"Method","fromName":"Application\\Model\\Comment\\CommentRepository","fromLink":"Application/Model/Comment/CommentRepository.html","link":"Application/Model/Comment/CommentRepository.html#method_createComment","name":"Application\\Model\\Comment\\CommentRepository::createComment","doc":null},
        {"type":"Method","fromName":"Application\\Model\\Comment\\CommentRepository","fromLink":"Application/Model/Comment/CommentRepository.html","link":"Application/Model/Comment/CommentRepository.html#method_updateComment","name":"Application\\Model\\Comment\\CommentRepository::updateComment","doc":null},
            
                                                {"type":"Class","fromName":"Application\\Model\\Post","fromLink":"Application/Model/Post.html","link":"Application/Model/Post/Post.html","name":"Application\\Model\\Post\\Post","doc":null},
                
                                                {"type":"Class","fromName":"Application\\Model\\Post","fromLink":"Application/Model/Post.html","link":"Application/Model/Post/PostRepository.html","name":"Application\\Model\\Post\\PostRepository","doc":null},
                                {"type":"Method","fromName":"Application\\Model\\Post\\PostRepository","fromLink":"Application/Model/Post/PostRepository.html","link":"Application/Model/Post/PostRepository.html#method_getPost","name":"Application\\Model\\Post\\PostRepository::getPost","doc":null},
        {"type":"Method","fromName":"Application\\Model\\Post\\PostRepository","fromLink":"Application/Model/Post/PostRepository.html","link":"Application/Model/Post/PostRepository.html#method_getPosts","name":"Application\\Model\\Post\\PostRepository::getPosts","doc":null},
            
                                // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Doctum = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Doctum.injectApiTree($('#api-tree'));
    });

    return root.Doctum;
})(window);

$(function() {

    
    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').on('click', function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Doctum.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


