var O365;(function(n){var t=function(){function n(){}return n.Concierge='concierge',n.NewConcierge='conciergev2',n}(),i;n.UpsellControlConstants=t,i=function(){function n(){}return n.OnClientButtonClick=function(n,i){n===t.Concierge?Microsoft.Online.BOX.Admin.UI.ConciergeHelper.ToggleWidgetOnHomePage():n===t.NewConcierge&&(typeof Concierge=='undefined'?$.getScript("/JS/Support/Concierge/Concierge.js",function(){Concierge.Init(undefined,i)}):Concierge.RestoreWidget())},n}(),n.UpsellControl=i})(O365||(O365={}))